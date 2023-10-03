<?php

use App\Models\Flight;
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
        Schema::create('flights', function (Blueprint $table) {
            $table->id('flight_id');
            $table->date('date');
            $table->foreignId('airline_id')->references('airline_id')->on('airlines');
            $table->integer('limit');
            $table->timestamps();
        });

        Flight::create([
            'date' => '2023.10.03',
            'airline_id' => 1,
            'limit' => 69
        ]);

        Flight::create([
            'date' => '2023.10.04',
            'airline_id' => 2,
            'limit' => 420
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
