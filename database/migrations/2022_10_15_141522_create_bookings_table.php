<?php

declare(strict_types=1);

use App\Models\Seminar;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Seminar::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('username')->nullable();
            $table->string('firstname')->nullable();
            $table->string('country')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->boolean('status')->default(0);
            $table->date('booking_at')->nullable();
            $table->unsignedBigInteger('transaction_code')->unique();
            $table->unsignedInteger('ticket_number')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
