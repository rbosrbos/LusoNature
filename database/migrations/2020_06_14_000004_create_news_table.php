<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'news';

    /**
     * Run the migrations.
     * @table news
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('admin_id', 36);
            $table->string('title');
            $table->longText('body');
            $table->text('summary');
            $table->char('uuid', 36);

            $table->index(["admin_id"], 'fk_news_admins1_idx');

            $table->unique(["uuid"], 'uuid_UNIQUE');
            $table->timestamps();


            $table->foreign('admin_id', 'fk_news_admins1_idx')
                ->references('id')->on('admins')
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
