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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('ProveedorID');
            $table->string('Nombre', 100);
            $table->string('Contacto', 100);
            $table->string('Telefono', 20);
            $table->string('Email', 100)->nullable();
            $table->text('Direccion')->nullable();
            $table->unsignedBigInteger('CategoriaID');
            $table->timestamps();

            $table->foreign('CategoriaID')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
