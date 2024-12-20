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
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo');
            $table->string('endereco');
            $table->double('distancia');
            $table->double('tempo');
            $table->date('data');
            $table->string('descricao');

            // Relacionamento com a tabela users
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Relacionamento com a tabela bicicletas
            $table->unsignedBigInteger('bicicleta_id')->nullable();
            $table->foreign('bicicleta_id')->references('id')->on('bicicletas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividades');
    }
};
