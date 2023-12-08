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
        Schema::create('d_existencias', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->integer('precio');
            $table->integer('idmedicamento');
            $table->date('fechavencimiento');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_existencias');
    }
};
