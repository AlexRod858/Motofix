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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_modelo');

            // Agregar la clave foránea
            $table->unsignedBigInteger('moto_id')->nullable(); // Puedes cambiar 'moto_id' por el nombre que prefieras

            // Definir la relación de clave foránea
            $table->foreign('moto_id')
                ->references('id')
                ->on('motos')
                ->onDelete('cascade'); // Esto significa que si la moto asociada se elimina, también se eliminarán los modelos asociados
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};
