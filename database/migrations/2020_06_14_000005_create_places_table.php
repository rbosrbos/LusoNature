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
            $table->unsignedInteger('categories_id');
            $table->unsignedInteger('cities_id');
            $table->char('user_id', 36);
            $table->string('name');
            $table->longText('description');
            $table->integer('parking')->default('0');
            $table->integer('wc')->default('0');
            $table->integer('restaurants')->default('0');
            $table->string('latitude', 45)->nullable();
            $table->string('longitude', 45)->nullable();
            $table->tinyInteger('status')->default('0');

            $table->index(["categories_id"], 'fk_places_categories1_idx');

            $table->index(["cities_id"], 'fk_places_cities1_idx');

            $table->index(["user_id"], 'fk_places_users1_idx');
            $table->timestamps();


            $table->foreign('user_id', 'fk_places_users1_idx')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('categories_id', 'fk_places_categories1_idx')
                ->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cities_id', 'fk_places_cities1_idx')
                ->references('id')->on('cities')
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
