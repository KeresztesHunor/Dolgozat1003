<?php

use App\Models\Travel;
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
        Schema::create('travel', function (Blueprint $table) {
            $table->id('travel_id');
            $table->string('evaluation');
            $table->foreignId('flight_id')->references('flight_id')->on('flights');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Travel::create([
            'evaluation' => 'asd',
            'flight_id' => 1,
            'user_id' => 1
        ]);

        Travel::create([
            'evaluation' => 'fgh',
            'flight_id' => 2,
            'user_id' => 2
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel');
    }
};
