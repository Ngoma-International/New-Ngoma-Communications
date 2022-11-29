<?php

declare(strict_types=1);

use App\Models\Category;
use App\Models\SeminaryType;
use App\Models\Type;
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
            $table->foreignIdFor(Type::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(SeminaryType::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('title')->unique();
            $table->string('sub_title')->unique();
            $table->string('duration')->nullable();
            $table->date('date')->nullable();
            $table->json('address')->default('[]');
            $table->boolean('status')
                ->default(0);
            $table->unsignedInteger('prices')
                ->default(0)
                ->nullable();
            $table->text('overview')
                ->nullable();
            $table->text('participate')
                ->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seminars');
    }
};
