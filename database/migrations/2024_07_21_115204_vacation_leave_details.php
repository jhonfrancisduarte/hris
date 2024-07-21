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
        if (!Schema::hasTable('vacation_leave_details')) {
            Schema::create('vacation_leave_details', function (Blueprint $table) {
                $table->id('id');
                $table->unsignedBigInteger('application_id');
                $table->foreign('application_id')->references('id')->on('leave_application')->onDelete('cascade');
                $table->string('total_earned');
                $table->string('less_this_application');
                $table->string('balance');
                $table->string('recommendation')->nullable();
                $table->string('status')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('vacation_leave_details')) {
            Schema::dropIfExists('vacation_leave_details');
        }
    }
};
