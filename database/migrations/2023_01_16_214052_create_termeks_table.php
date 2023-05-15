<?php

use App\Models\Termek;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termeks', function (Blueprint $table) {
            $table->id('termek_id');
            $table->foreignId('modell')->references('modell_id')->on('modells');
            $table->char('meret', 3);
            $table->integer('keszlet');
            $table->timestamps();
        });
        Termek::create(['modell' => '1', 'meret' => 'XS', 'keszlet' => 1]);
        Termek::create(['modell' => '2', 'meret' => 'M', 'keszlet' => 6]);
        Termek::create(['modell' => '2', 'meret' => 'S', 'keszlet' => 6]);
        Termek::create(['modell' => '2', 'meret' => 'L', 'keszlet' => 6]);
        Termek::create(['modell' => '3', 'meret' => 'XL', 'keszlet' => 4]);
        Termek::create(['modell' => '3', 'meret' => 'XXL', 'keszlet' => 4]);
        Termek::create(['modell' => '3', 'meret' => 'XS', 'keszlet' => 4]);
        Termek::create(['modell' => '4', 'meret' => 'XL', 'keszlet' => 2]);
        Termek::create(['modell' => '5', 'meret' => 'S', 'keszlet' => 22]);
        Termek::create(['modell' => '6', 'meret' => 'M', 'keszlet' => 7]);
        Termek::create(['modell' => '7', 'meret' => 'S', 'keszlet' => 3]);
        Termek::create(['modell' => '8', 'meret' => 'M', 'keszlet' => 5]);
        Termek::create(['modell' => '9', 'meret' => 'L', 'keszlet' => 3]);
        Termek::create(['modell' => '10', 'meret' => 'M', 'keszlet' => 4]);
        Termek::create(['modell' => '11', 'meret' => 'L', 'keszlet' => 1]);
        Termek::create(['modell' => '12', 'meret' => 'XL', 'keszlet' => 2]);
        Termek::create(['modell' => '13', 'meret' => 'L', 'keszlet' => 5]);
        Termek::create(['modell' => '14', 'meret' => 'S', 'keszlet' => 5]);
        Termek::create(['modell' => '15', 'meret' => 'M', 'keszlet' => 5]);
        Termek::create(['modell' => '16', 'meret' => 'XL', 'keszlet' => 6]);
        Termek::create(['modell' => '17', 'meret' => 'XXL', 'keszlet' => 7]);
        Termek::create(['modell' => '18', 'meret' => 'M', 'keszlet' => 8]);
        Termek::create(['modell' => '19', 'meret' => 'L', 'keszlet' => 9]);
        Termek::create(['modell' => '20', 'meret' => 'XXL', 'keszlet' => 3]);
        Termek::create(['modell' => '1', 'meret' => 'M', 'keszlet' => 4]);
        Termek::create(['modell' => '1', 'meret' => 'L', 'keszlet' => 9]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('termeks');
    }
};
