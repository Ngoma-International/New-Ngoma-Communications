<?php

declare(strict_types=1);

use App\Models\Seminary;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('class_rooms', function (Blueprint $table) {
            $table->foreignIdFor(Seminary::class)
                ->constrained()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::table('seminaries', function (Blueprint $table) {
            $table->dropForeignIdFor(Seminary::class);
        });
    }
};
