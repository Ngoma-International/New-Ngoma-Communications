<?php

declare(strict_types=1);

use App\Models\Category;
use App\Models\SeminaryType;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(SeminaryType::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('name')->unique();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->unsignedInteger('prices')->nullable();
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->date('date')->nullable();
            $table->unsignedInteger('duration')->default(0);
            $table->string('address_seminar')->nullable();
            $table->string('attend')->nullable();
            $table->text('overview')->nullable();
            $table->string('images')->nullable();
            $table->boolean('status')->default(0);
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seminars');
    }
};
