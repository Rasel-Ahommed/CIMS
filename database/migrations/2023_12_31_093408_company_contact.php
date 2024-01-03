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
        Schema::create('company_contact', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')
                    ->references('id')
                    ->on('company')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('name');
            $table->string('designation');
            $table->string('phone');
            $table->string('email')->unique()->nullable();
            $table->string('category');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_contact');
    }
};
