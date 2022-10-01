<?php

declare(strict_types=1);

use App\Enums\PodcastEnum;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('podcast_title');
            $table->enum('postcast_type', [
                PodcastEnum::Podcast_audio,
                PodcastEnum::Podcast_video
            ])->default(PodcastEnum::Podcast_audio);
            $table->string('podcast_offering');
            $table->string('thumbnail');
            $table->string('podcast_file');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('podcasts');
    }
};
