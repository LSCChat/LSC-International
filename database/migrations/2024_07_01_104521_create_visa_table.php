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
        Schema::create('visa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_detail_id');
            $table->foreign('candidate_detail_id')
                ->references('id')->on('candidate_details')->onDelete('cascade')->onUpdate('cascade');
            $table->string('visa_url');
            $table->boolean('is_active')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa');
    }
};
