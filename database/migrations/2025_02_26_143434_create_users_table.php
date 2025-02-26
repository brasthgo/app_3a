<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
        $table->string('cpf', 11)->unique();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->string('phone', 13)->unique();
        $table->boolean('is_verified')->default(false);
        $table->string('role'); // ex.: admin, accountant, fiscal
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
