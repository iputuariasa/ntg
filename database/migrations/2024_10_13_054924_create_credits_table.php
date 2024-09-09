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
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branches_id')->references('id')->on('branches')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('debtor_name');
            $table->string('account_number');
            $table->date('date_of_application');
            $table->string('address');
            $table->string('phone');
            $table->float('nominal_application');
            $table->string('time_period');
            $table->string('reference');
            $table->string('ao');
            $table->string('survey_number');
            $table->string('region');
            $table->string('disbursement_date');
            $table->string('dropping');
            $table->string('status');
            $table->string('principal_repayment');
            $table->string('clean_dropping');
            $table->string('pillar_type');
            $table->string('des');
            $table->string('month_of_process');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credits');
    }
};
