<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('facilitators', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('firstname')->nullable();
            $table->string('organisation')->nullable();
            $table->string('position')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('country')->nullable();
            $table->string('description')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('facilitators');
    }
};
