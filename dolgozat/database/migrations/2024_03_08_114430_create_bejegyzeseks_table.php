<?php

use App\Models\Bejegyzesek;
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
        Schema::create('bejegyzeseks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenysegs');
            $table->foreignId('osztaly_id')->references('osztaly_id')->on('osztalies');
            $table->boolean('allapot');
            $table->timestamps();
        });

        
        Bejegyzesek::create(["tevekenyseg_id"=>1,"osztaly_id"=>1,"allapot"=>true]);
        Bejegyzesek::create(["tevekenyseg_id"=>2,"osztaly_id"=>1,"allapot"=>true]);
        Bejegyzesek::create(["tevekenyseg_id"=>3,"osztaly_id"=>1,"allapot"=>false]);
        Bejegyzesek::create(["tevekenyseg_id"=>4,"osztaly_id"=>1,"allapot"=>true]);
        Bejegyzesek::create(["tevekenyseg_id"=>5,"osztaly_id"=>1,"allapot"=>true]);
        Bejegyzesek::create(["tevekenyseg_id"=>6,"osztaly_id"=>1,"allapot"=>false]);
        Bejegyzesek::create(["tevekenyseg_id"=>7,"osztaly_id"=>2,"allapot"=>true]);
        Bejegyzesek::create(["tevekenyseg_id"=>8,"osztaly_id"=>2,"allapot"=>true]);
        Bejegyzesek::create(["tevekenyseg_id"=>9,"osztaly_id"=>2,"allapot"=>true]);
        Bejegyzesek::create(["tevekenyseg_id"=>10,"osztaly_id"=>2,"allapot"=>true]);
        Bejegyzesek::create(["tevekenyseg_id"=>11,"osztaly_id"=>3,"allapot"=>true]);
        Bejegyzesek::create(["tevekenyseg_id"=>12,"osztaly_id"=>3,"allapot"=>true]);
        Bejegyzesek::create(["tevekenyseg_id"=>13,"osztaly_id"=>3,"allapot"=>false]);
        Bejegyzesek::create(["tevekenyseg_id"=>1,"osztaly_id"=>3,"allapot"=>true]);
        Bejegyzesek::create(["tevekenyseg_id"=>2,"osztaly_id"=>3,"allapot"=>true]);
        Bejegyzesek::create(["tevekenyseg_id"=>3,"osztaly_id"=>3,"allapot"=>false]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bejegyzeseks');
    }
};
