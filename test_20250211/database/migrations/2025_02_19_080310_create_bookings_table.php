<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('num_people')->default(1)->change(); // 设置默认值为 1
            $table->dateTime('booking_time');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('bookings');
    }
};

