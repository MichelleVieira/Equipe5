<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicoSolicitadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico_solicitados', function (Blueprint $table) {
            $table->id();

            //Definindo foreignKey
            $table->foreignId('cliente_id')->constrained('clientes'); // id do cliente da tabela clientes
            $table->foreignId('servico_id')->constrained('cadastro_servicos'); // id do serviço da tabela cadastro de servicos

            $table->string('pagamento');
            $table->string('status');
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
        Schema::dropIfExists('servico_solicitados');
    }
}
