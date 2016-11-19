<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RequestForm extends Migration
{
    /**
     * Заявка состоит из email’а и текста (необязательное поле, максимум 5000 символов)
     * Все заявки необходимо сохранять в базу данных,
     * вместе с датой создания этой заявки и номером заявки (должен генерироваться автоматически).
     */
    public function up()
    {
        Schema::create('request_form', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mail');
            $table->text('text');
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
        Schema::drop('request_form');
    }
}
