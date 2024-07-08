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
        Schema::create('candidate_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_detail_id');
            $table->foreign('candidate_detail_id')
                ->references('id')->on('candidate_details')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')
                ->references('id')->on('documents')->onDelete('cascade')->onUpdate('cascade');
            $table->string('document_url');
            $table->boolean('is_active')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_documents');
    }
};
