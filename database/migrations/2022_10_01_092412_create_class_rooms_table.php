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
            $table->string('room_id')->nullable();
            $table->string('room_name')->nullable();
            $table->string('facilitator_id')->nullable();
            $table->integer('room_pin')->nullable();
            $table->string('student_id')->nullable();
            $table->integer('student_pin')->nullable();
            $table->date('scheduled_date')->nullable();
            $table->time('start_time')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('class_rooms');
    }
};
