<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'images';

    /**
     * Run the migrations.
     * @table images
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('id');
            $table->primary('id');
            $table->char('place_id', 36);
            $table->char('user_id', 36);
            $table->tinyInteger('status')->default('0');

            $table->index(["place_id"], 'fk_places_has_users_places3_idx');

            $table->index(["user_id"], 'fk_places_has_users_users3_idx');
            $table->nullableTimestamps();


            $table->foreign('place_id', 'fk_places_has_users_places3_idx')
                ->references('id')->on('places')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id', 'fk_places_has_users_users3_idx')
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
