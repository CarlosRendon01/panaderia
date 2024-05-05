<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id(); // ID autoincremental como llave primaria
        
            // Corregido para que coincida con el tipo de dato de 'numeroDeControl' en 'estudiantes'
            // Asumiendo 'numeroDeControl' como VARCHAR, ajusta la longitud si es necesario
            $table->unsignedBigInteger('estudiante_id'); // Asume que 'id' en 'estudiantes' es de tipo unsignedBigInteger
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
        
            // Llave foránea a la tabla 'grupos'
            $table->string('grupo_clave');
            $table->foreign('grupo_clave')->references('clave')->on('grupos')->onDelete('cascade');
        
            $table->timestamps(); // Campos opcionales para la fecha de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripciones');
    }
}
