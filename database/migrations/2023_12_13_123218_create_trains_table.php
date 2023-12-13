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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 100);
            $table->string('stazione di arrivo', 100);
            $table->time('orario di partenza');
            $table->time('orario di arrivo');
            $table->string('codice treno')->unique();
            $table->unsignedTinyInteger('numero carrozze');
            $table->string('in orario');
            $table->string('cancellato')->default('non è stato cancellato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
