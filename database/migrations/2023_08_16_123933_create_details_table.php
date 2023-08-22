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
        Schema::create('details', function (Blueprint $table) { 
            $table->string('referenceTitrePerception')->primary();
            $table->string('motifivationRecours');
            $table->string('motivationReclamation');
            $table->integer('montantConteste');
            $table->integer('montantNonConteste');
            $table->string('typedocument');
            $table->integer('montantDu');
            $table->boolean('avecSurcis');
            $table->char('devise',5);
            $table->integer('agentCreate');
            $table->integer('fkActeGenerateur');
            $table->string('intituleActeGenerateur');
            $table->timestamps();
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
