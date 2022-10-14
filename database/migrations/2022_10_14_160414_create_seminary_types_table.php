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

        $seminary_types = [
            'Open Seminar',
            'CSR Event',
            'Online event',
        ];

        foreach ($seminary_types as $seminary) {
            SeminaryType::query()
                ->create([
                    'name' => $seminary
                ]);
        }
    }

    public function down()
    {
        Schema::dropIfExists('seminary_types');
    }
};
