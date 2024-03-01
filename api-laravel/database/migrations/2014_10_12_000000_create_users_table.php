<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cpf')->nullable();
            $table->string('cel')->nullable();
            $table->string('cep')->nullable();
            $table->string('uf')->nullable();
            $table->string('city')->nullable();
            $table->string('end')->nullable();
            $table->string('num')->nullable();
            $table->string('comp')->nullable();
            $table->string('bairro')->nullable();
            $table->string('ref')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
