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
        Schema::create('agency_process', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agency_id');
            $table->foreign('agency_id')
                ->references('id')->on('agencies')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('process_id');
            $table->foreign('process_id')
                ->references('id')->on('process')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_active')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_process');
    }
};
