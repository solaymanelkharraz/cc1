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
    Schema::create('evenements', function (Blueprint $table) {
        $table->id();
        $table->string('theme');
        $table->date('date_debut');
        $table->date('date_fin');
        $table->text('description');
        $table->double('cout_journalier');
        $table->foreignId('expert_id')->constrained('experts')->onDelete('cascade'); // Foreign Key [cite: 496]
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
