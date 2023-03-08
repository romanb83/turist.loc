<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingObjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_object', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger('number_floor');        // Этажность здания
            $table->tinyInteger('total_rooms');         // Всего номеров
            $table->string('room_type');                // Тип номера
            $table->tinyInteger('quantity_rooms');      // Кол-во комнат
            $table->tinyInteger('sleeping_place');      // Кол-во спальныйх мест
            $table->tinyInteger('square');              // Площадь номера
            $table->string('parking');                  // Где находится парковка
            $table->string('kitchen');                  // Где находится кухня
            $table->text('furniture');                  // Мебель
            $table->text('comfort');                    // Удобства(кондиционер, холодильник, телевизор и т.д.)
            $table->string('bathroom_wc');              // Где находится ванная и туалет
            $table->text('transfer');                   // Трансфер(есть или нет, условия)
            $table->text('additionally');               // Дополнительно
            $table->text('description');                // Описание
            $table->time('arrival_time');               // Время прибытия
            $table->time('departure_time');             // Время отъезда
            $table->string('limitations');              // Ограничения(например не курить, без животных)
            $table->string('change_linen');             // Сменя белья
            $table->string('change_towels');            // Сменя полотенец
            $table->string('room_cleaning');            // Уборка в номере
            $table->string('meal');                     // Питание
            $table->text('distances');                  // Расстояния
            $table->string('discount');                 // Скидки
            $table->integer('price');                   // Стоимость номера
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_object');
    }
}
