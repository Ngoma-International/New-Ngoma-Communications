<?php

declare(strict_types=1);

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
            $table->string('name')->nullable();
            $table->timestamps();
        });

        $services = [
            "Online Event",
            "CSR Event",
            "Open Seminar",
        ];

        foreach ($services as $service) {
            Type::query()
                ->create(['name' => $service]);
        }
    }

    public function down()
    {
        Schema::dropIfExists('types');
    }
};
