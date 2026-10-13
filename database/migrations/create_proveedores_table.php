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
        Schema::create('Proveedores', function (Blueprint $table) {
            $table->string('id)');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('correo_electronico');
            $table->string('cod_solicitud');
        });   
    
    }

    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('Proveedores');
    }
    
};
