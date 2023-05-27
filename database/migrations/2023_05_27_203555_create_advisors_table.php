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
        Schema::create('advisors', function (Blueprint $table) {
            $table->id();
            $table->integer('s_ID');
            $table->integer('i_ID');
            $table->timestamps();
        });
        Schema::table('advisors', function (Blueprint $table) {
            $table->foreign('s_ID')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('i_ID')->references('id')->on('instructors')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advisors');
    }
};
