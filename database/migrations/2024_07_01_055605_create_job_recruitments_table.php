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
        Schema::create('job_recruitments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_of_vacancy');
            $table->date('deadline');
            $table->unsignedBigInteger('job_role_id');
            $table->foreign('job_role_id')
                ->references('id')->on('job_roles')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('agency_id');
            $table->foreign('agency_id')
                ->references('id')->on('agencies')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')
                ->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_active')->default('1');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_recruitments');
    }
};
