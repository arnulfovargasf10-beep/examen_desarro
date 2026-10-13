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
        Schema::create('Productos', function (Blueprint $table) {
            $table->string('id');
            $table->string('nombre_producto');
            $table->string('fecha_elaborada');
            $table->string('fecha_vencimiento');
           
        });  
    } 
    
     /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Productos');
        
    }
}; 