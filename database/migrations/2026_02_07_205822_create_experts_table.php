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
    Schema::create('experts', function (Blueprint $table) {
        $table->id(); // [cite: 495]
        $table->string('nomExp'); // [cite: 495]
        $table->string('prénomExp'); // [cite: 495]
        $table->string('telExp'); // [cite: 495]
        $table->string('SpécialitéExp'); // [cite: 495]
        $table->string('EmailExp'); // [cite: 495]
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experts');
    }
};
