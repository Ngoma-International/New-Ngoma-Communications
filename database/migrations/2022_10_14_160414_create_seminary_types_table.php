<?php

declare(strict_types=1);

use App\Models\SeminaryType;
use App\Models\Type;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('seminary_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $events_types = [
            'Leader conference',
            'Private',
            'Publique',
            'interne'
        ];

        $types = [
            'Annuel',
            'Seminare',
            'Conference',
            'Pre-Conference',
            'Discours'
        ];

        foreach ($types as $type) {
            Type::query()
                ->create([
                    'name' => $type
                ]);
        }


        foreach ($events_types as $event) {
            SeminaryType::query()
                ->create(['name' => $event]);
        }
    }

    public function down()
    {
        Schema::dropIfExists('types');
        Schema::dropIfExists('seminary_types');
    }
};
