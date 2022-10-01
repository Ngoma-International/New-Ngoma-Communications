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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Seminary::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('ticket_buyer');
            $table->string('ticket_buyer_email');
            $table->string('buyer_phone');
            $table->integer('ticket_code');
            $table->date('ticket_date_purchased');
            $table->boolean('ticket_status')->default(0);
            $table->string('ticket_contact');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
