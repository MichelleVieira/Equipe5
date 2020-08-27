<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_servicos', function (Blueprint $table) {
            $table->id();
            
            //Definindo uma foreignKey
            $table->foreignId('fornecedor_id')->constrained('fornecedors');
            
            $table->string('nome',100);
            $table->decimal('valor', 7,2); // valores com até 7 casas, sendo que 2 é depois da virgula (10000,00)
            $table->text('descricao');
            $table->string('forma_de_pagamento');
            $table->string('foto');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastro_servicos');
    }
}
