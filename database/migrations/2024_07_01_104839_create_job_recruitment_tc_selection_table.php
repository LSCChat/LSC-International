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
        Schema::create('job_recruitment_tc_selection', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_recruitment_id');
            $table->foreign('job_recruitment_id')
                ->references('id')->on('job_recruitments')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('user_detail_id');
            $table->foreign('user_detail_id')
                ->references('id')->on('user_details')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_active')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_recruitment_tc_selection');
    }
};
