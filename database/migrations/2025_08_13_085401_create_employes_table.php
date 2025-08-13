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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->unsignedInteger('tel');
            $table->string('email')->unique();
            $table->enum('poste', ['Logistique', 'Réception', 'Comptabilité', 'Vente', 'Direction']);
            $table->enum('role', ['Ouvrier polyvalent', 'employé polyvalent', 'Comptable', 'Assistant du régional manager', 'Régional manager']);
            $table->float('salaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
