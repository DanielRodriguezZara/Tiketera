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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->date('fechaInicio');
            $table->date('fechaFinal');
            $table->time('horaInicio');
            $table->time('horaFinal');
            $table->text('descripcion');
            $table->string('beneficio_id')->constrained('beneficios')->onDelete('cascade');
            $table->string('user_id')->constrained('user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
