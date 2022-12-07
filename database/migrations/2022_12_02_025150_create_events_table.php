<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable();
            $table->string('company')->nullable();
            $table->string('jobTitle')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('category')->nullable();
            $table->longText('comments')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
