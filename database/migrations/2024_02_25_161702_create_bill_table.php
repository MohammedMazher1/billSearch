<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->string('CONTRACT_NO')->primary();
            $table->string('BRANCH_NO');
            $table->string('NAME');
            $table->string('TYPE_OF_CUSTOMER');
            $table->string('P_MONTH');
            $table->string('P_YEA');
            $table->string('PREV_BILL_AMOUNT');
            $table->string('CUR_MON_TOT_BILL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');
    }
};
