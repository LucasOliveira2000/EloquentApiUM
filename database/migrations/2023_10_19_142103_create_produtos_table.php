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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->text('preco');
            $table->text('slug');
            $table->text('imagem')->nullable();
            
            $table->unsignedBigInteger('id_user'); //chave estrangeira
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade'); // configura a chave estrangeira 'id_user' para o 'id' da tabela 'users', e vou deletar e atualizar com o cascade para deletar tudo o usuario e os produtos.
            
            $table->unsignedBigInteger('id_categoria'); //chave estrangeira da categoria do produto
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade'); // faz referencia ao id da tabela categorias
            
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
