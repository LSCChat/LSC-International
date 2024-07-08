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
        Schema::create('lms_test', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_detail_id');
            $table->foreign('candidate_detail_id')
                ->references('id')->on('candidate_details')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('mark');
            $table->boolean('result')->default('1');
            $table->string('remarks');
            $table->boolean('is_active')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lms_test');
    }
};
