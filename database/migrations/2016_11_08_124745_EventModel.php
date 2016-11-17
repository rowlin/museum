<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  Мероприятия
        Schema::create('Event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');// название экскурсии
            $table->string('title');// какое-то описание
            $table->string('name_org'); //имя организатора
            $table->text('post');//описание
            $table->text('post2'); //запас
            $table->dateTime('start'); // время начала
            $table->dateTime('end'); // время конца
            $table->integer('age'); // возрастные органичения (если есть)
            $table->text('image'); // изображение/я .. если есть
            $table->boolean('public');//опубликовано или нет
            $table->string('type');// тип мероприятия
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Event');
    }
}
