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
        Schema::create('cscredits', function (Blueprint $table) {
            $table->id();
            $table->string('no_reg');
            $table->string('debtor_name');
            $table->string('debtor_nik');
            $table->string('debtor_pob');
            $table->string('debtor_dob');
            $table->string('address');
            $table->float('nominal_application');
            $table->date('date_of_application');
            $table->string('time_period');
            $table->string('reference');
            $table->string('guarantor1_name');
            $table->string('guarantor1_nik');
            $table->string('guarantor1_pob');
            $table->string('guarantor1_dob');
            $table->string('guarantor2_name');
            $table->string('guarantor2_nik');
            $table->string('guarantor2_pob');
            $table->string('guarantor2_dob');
            $table->string('guarantor3_name');
            $table->string('guarantor3_nik');
            $table->string('guarantor3_pob');
            $table->string('guarantor3_dob');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cscredits');
    }
};
