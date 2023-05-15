<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use App\Models\Termek;
use App\Models\Modell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriaController extends Controller
{
    public function index()
    {
        $kategorias =  Kategoria::all();
        return $kategorias;
    }



    public function destroy($id)
    {
        Kategoria::find($id)->delete();
    }

    public function store(Request $request)
    {
        $kategorias  = new Kategoria();
        $kategorias ->nev = $request->nev;
        $kategorias ->save();
    }

    public function update(Request $request, $id)
    {
        $kategorias = Kategoria::find($id);
        $kategorias ->nev = $request->nev;
        $kategorias ->save();
    }


    public function modellek(Kategoria $kategoria){
        return $kategoria->modellek;
    }


}
