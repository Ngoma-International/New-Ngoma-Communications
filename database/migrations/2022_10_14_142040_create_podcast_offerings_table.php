<?php

declare(strict_types=1);

use App\Models\PodcastOffering;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('podcast_offerings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $podcast_offerings = [
            'Leading Yourself',
            'Leading People',
            'Leading Organisations',
            'Life Skills',
            'Thusa Life Skills'
        ];

        foreach ($podcast_offerings as $offering) {
            PodcastOffering::query()
                ->create([
                    'name' => $offering
                ]);
        }
    }

    public function down()
    {
        Schema::dropIfExists('podcast_offerings');
    }
};
