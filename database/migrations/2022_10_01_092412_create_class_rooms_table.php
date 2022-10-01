<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('class_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('room_iD');
            $table->string('room_otp');
            $table->string('room_name');
            $table->string('facilitator_id');
            $table->integer('room_pin');
            $table->string('student_id');
            $table->string('module_id');
            $table->integer('student_pin');
            $table->date('scheduled_date');
            $table->time('start_time');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('class_rooms');
    }
};
