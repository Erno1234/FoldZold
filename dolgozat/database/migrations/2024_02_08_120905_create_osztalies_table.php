<?php

use App\Models\Osztaly;
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
        Schema::create('osztalies', function (Blueprint $table) {
            $table->id('osztaly_id');
            $table->string('osztaly_nev');
            $table->timestamps();
        });

        Osztaly::create(["osztaly_nev"=>"SZF2"]);
        Osztaly::create(["osztaly_nev"=>"SZF1"]);
        Osztaly::create(["osztaly_nev"=>"IRU2"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('osztalies');
    }
};
