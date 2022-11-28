<?php

declare(strict_types=1);

use App\Models\SeminaryType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('seminary_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $events_types = [
            'Leader conference',
            'Private',
            'Publique'
        ];

        foreach ($events_types as $event) {
            SeminaryType::query()
                ->create(['name' => $event]);
        }
    }

    public function down()
    {
        Schema::dropIfExists('seminary_types');
    }
};
