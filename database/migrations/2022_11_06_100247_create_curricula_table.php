<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('curricula', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->json('address')->default('[]')->nullable();
            $table->json('contact')->default('[]')->nullable();
            $table->json('experience')->default('[]')->nullable();
            $table->json('formation')->default('[]')->nullable();
            $table->json('competence')->default('[]')->nullable();
            $table->json('language')->default('[]')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('curricula');
    }
};
