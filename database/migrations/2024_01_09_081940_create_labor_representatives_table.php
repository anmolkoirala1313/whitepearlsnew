<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('labor_representatives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('authorized_agency_id')->constrained()->cascadeOnUpdate();
            $table->string('title');
            $table->string('contact_number')->nullable();
            $table->string('office_number')->nullable();
            $table->string('address')->nullable();
            $table->additionalColumns();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labor_representatives');
    }
};
