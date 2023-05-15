<?php

namespace App\Http\Controllers;

use App\Models\Tervezo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Termek;
use App\Models\Modell;

class TervezoController extends Controller
{
    public function index(){
        $tervezok =  Tervezo::all();
        return $tervezok;
    }

    public function show(Tervezo $tervezo) {
        return view('pages/tervezo', ['tervezo' => $tervezo->load([
            'tervezo',
        ])]);
    }

    public function destroy($id)
    {
        Tervezo::find($id)->delete();
    }

    public function store(Request $request)
    {
        $tervezos  = new Tervezo();
        $tervezos ->nev = $request->nev;
        $tervezos ->save();
    }
    public function update(Request $request, $id)
    {
        $tervezos = Tervezo::find($id);
        $tervezos ->nev = $request->nev;
        $tervezos ->save();
    }


}
