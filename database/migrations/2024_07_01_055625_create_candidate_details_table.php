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
        Schema::create('candidate_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_recruitment_id');
            $table->foreign('job_recruitment_id')
                ->references('id')->on('job_recruitments')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')
                ->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('process_id');
            $table->foreign('process_id')
                ->references('id')->on('process')->onDelete('cascade')->onUpdate('cascade');            
            $table->string('sur_name');
            $table->string('given_name');
            $table->string('father_name');
            $table->string('passport_number');
            $table->date('passport_expiry_date');
            $table->bigInteger('mobile_number');
            $table->date('date_of_birth');
            $table->bigInteger('age');
            $table->string('gender');
            $table->string('location');
            $table->string('religion');
            $table->string('higher_qualification');
            $table->string('total_work_experience');
            $table->string('district');
            $table->string('state');
            $table->bigInteger('pincode');
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
        Schema::dropIfExists('candidate_details');
    }
};
