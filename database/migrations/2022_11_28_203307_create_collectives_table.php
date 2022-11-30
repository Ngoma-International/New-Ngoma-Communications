<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('collectives', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('organisation_name');
            $table->string('organisation_register_number');
            $table->string('organisation_industry');
            $table->string('organisation_country');
            $table->string('organisation_position');
            $table->string('organisation_city');
            $table->string('organisation_province');
            $table->string('organisation_website')->nullable();
            $table->string('member_username');
            $table->string('member_lastname');
            $table->string('member_email');
            $table->string('member_phone');
            $table->string('member_job_title');
            $table->integer('member_number');
            $table->string('contact_username');
            $table->string('contact_firstname');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('contact_job_title');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('collectives');
    }
};
