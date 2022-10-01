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
            $table->string('seminar_name');
            $table->string('seminar_photo');
            $table->string('seminar_price');
            $table->time('seminar_startTime');
            $table->time('seminar_endTime');
            $table->integer('seminar_duration');
            $table->date('seminar_date');
            $table->longText('seminar_description')->nullable();
            $table->longText('seminar_target')->nullable();
            $table->string('seminar_outline')->nullable();
            $table->string('seminar_avenue')->nullable();
            $table->string('seminar_country')->nullable();
            $table->string('seminar_city')->nullable();
            $table->string('seminar_offering')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seminaries');
    }
};
