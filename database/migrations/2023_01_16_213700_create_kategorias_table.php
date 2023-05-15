<?php

use App\Models\Kategoria;
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
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id('kategoria_id');
            $table->string('nev', 20);
            $table->timestamps();
        });

        Kategoria::create(['nev' => 'Nadrág']);
        Kategoria::create(['nev' => 'Pulóver']);
        Kategoria::create(['nev' => 'Sapka']);
        Kategoria::create(['nev' => 'Zokni']);
        Kategoria::create(['nev' => 'Ing']);
        Kategoria::create(['nev' => 'Póló']);
        Kategoria::create(['nev' => 'Kabát']);
        Kategoria::create(['nev' => 'Kesztyű']);
        Kategoria::create(['nev' => 'Sál']);
        Kategoria::create(['nev' => 'Zakó']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategorias');
    }
};
