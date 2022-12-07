<?php

use App\Models\Facilitator;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('seminars', function (Blueprint $table) {
            $table->foreignIdFor(Facilitator::class)
                ->constrained()
                ->cascadeOnDelete();
        });
        Schema::table('event_programs', function (Blueprint $table) {
            $table->foreignIdFor(Facilitator::class)
                ->constrained()
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('seminars', function (Blueprint $table) {
            $table->dropForeignIdFor(Facilitator::class);
        });
    }
};
