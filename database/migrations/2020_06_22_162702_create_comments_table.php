<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'comments';

    /**
     * Run the migrations.
     * @table comments
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
            $table->longText('comment');
            $table->tinyInteger('status')->default('0');

            $table->index(["user_id"], 'fk_places_has_users_users1_idx');

            $table->index(["place_id"], 'fk_places_has_users_places1_idx');
            $table->nullableTimestamps();


            $table->foreign('place_id', 'fk_places_has_users_places1_idx')
                ->references('id')->on('places')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id', 'fk_places_has_users_users1_idx')
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
