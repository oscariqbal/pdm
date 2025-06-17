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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->float('customer_id');
            $table->float('age');
            $table->string('gender');
            $table->float('tenure');
            $table->float('usage_frequency');
            $table->float('support_calls');
            $table->float('payment_delay');
            $table->string('subscription_type');
            $table->string('contract_length');
            $table->float('total_spend');
            $table->float('last_interaction');
            $table->float('churn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
