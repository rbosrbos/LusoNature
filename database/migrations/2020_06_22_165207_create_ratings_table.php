<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ratings';

    /**
     * Run the migrations.
     * @table ratings
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('place_id');
            $table->char('user_id', 36);
            $table->integer('access')->nullable();
            $table->integer('giftshops')->nullable();
            $table->integer('location')->nullable();
            $table->integer('restaurants')->nullable();

            $table->index(["place_id"], 'fk_places_has_users_places2_idx');

            $table->index(["user_id"], 'fk_places_has_users_users2_idx');

            $table->unique(["id"], 'id_UNIQUE');

            $table->unique(["user_id", "place_id"], 'only_one_user_per_place_rating');
            $table->nullableTimestamps();


            $table->foreign('place_id', 'fk_places_has_users_places2_idx')
                ->references('id')->on('places')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id', 'fk_places_has_users_users2_idx')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
