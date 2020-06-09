<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'places';

    /**
     * Run the migrations.
     * @table places
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('id');
            $table->primary('id');
            $table->char('user_id', 36);
            $table->string('name', 45);
            $table->string('description', 45);
            $table->integer('parking')->nullable();
            $table->integer('wc')->nullable();
            $table->integer('restaurants')->nullable();
            $table->tinyInteger('status')->nullable();

            $table->index(["user_id"], 'fk_places_users1_idx');


            $table->foreign('user_id', 'fk_places_users1_idx')
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
