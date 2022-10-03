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
        Schema::create('facilitators', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('description');
            $table->string('offerings');
            $table->string('images');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('facilitators');
    }
};
