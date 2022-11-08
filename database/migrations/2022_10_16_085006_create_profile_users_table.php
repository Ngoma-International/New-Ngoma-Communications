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
        Schema::create('profile_users', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->date('birthdays')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('town')->nullable();
            $table->string('enterprise')->nullable();
            $table->string('role')->nullable();
            $table->string('department')->nullable();
            $table->string('sector')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile_users');
    }
};
