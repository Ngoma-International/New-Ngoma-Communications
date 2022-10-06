<?php

declare(strict_types=1);

use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('seminaries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Type::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('photo');
            $table->string('price');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('duration');
            $table->date('date');
            $table->longText('description')->nullable();
            $table->longText('target')->nullable();
            $table->string('outline')->nullable();
            $table->string('avenue')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('offering')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seminaries');
    }
};
