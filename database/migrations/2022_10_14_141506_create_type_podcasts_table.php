<?php

declare(strict_types=1);

use App\Models\TypePodcast;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('type_podcasts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $type_podcast = ['audio', 'video'];
        foreach ($type_podcast as $type) {
            TypePodcast::query()
                ->create([
                    'name' => $type
                ]);
        }
    }

    public function down()
    {
        Schema::dropIfExists('type_podcasts');
    }
};
