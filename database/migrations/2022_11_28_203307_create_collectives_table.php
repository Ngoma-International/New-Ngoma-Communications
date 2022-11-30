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
            $table->string('organisation_register_number')->unique()->nullable();
            $table->string('organisation_industry')->nullable();
            $table->string('organisation_country')->nullable();
            $table->string('organisation_position')->nullable();
            $table->string('organisation_city')->nullable();
            $table->string('organisation_province')->nullable();
            $table->string('organisation_website')->nullable();
            $table->string('member_username')->nullable();
            $table->string('member_lastname')->nullable();
            $table->string('member_email')->unique()->nullable();
            $table->string('member_phone')->unique()->nullable();
            $table->string('member_job_title')->nullable();
            $table->integer('member_number')->unique()->nullable();
            $table->string('contact_username')->nullable();
            $table->string('contact_firstname')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->unique()->nullable();
            $table->string('matricule')->unique()->nullable();
            $table->string('contact_job_title')->nullable();
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
