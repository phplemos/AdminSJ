<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome_categoria');
            $table->string('descricao_categoria');
            $table->timestamps();
        });
        Schema::table('categorias', function(Blueprint $table){
            $table->foreignId('fk_setor')->references('id')->on('setors');
        });
        Schema::table('items', function(Blueprint $table){
            $table->foreignId('fk_categoria')->references('id')->on('categorias');
            $table->foreignId('fk_inventario')->references('id')->on('inventarios');

        });
        Schema::table('inventarios',function(Blueprint $table){
            $table->foreignId('fk_setor')->references('id')->on('setors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
};
