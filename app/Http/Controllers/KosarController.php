<?php

namespace App\Http\Controllers;

use App\Models\Kosar;
use App\Models\Termek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class KosarController extends Controller {

    public function kosarTartalma(){
        $user = Auth::user()->f_azon;
        return Kosar::with('termek')->where('user_id', $user)->get();
    }

    public function kosarhozAd(Request $request){
        $user = Auth::user()->f_azon;
        $kosar = DB::table("kosars")
            ->select("*")
            ->where('termek', $request->id)
            ->where('user_id', $user)
            ->get();
        if ($kosar){
            $termek = Kosar::find($request -> id);
            $termek ->mennyiseg += $request->mennyiseg;
            $termek ->save();
        }else{
            $kosar  = new Kosar();
            $kosar ->user_id = Auth::user()->f_azon;
            $kosar ->termek = $request->id;
            $kosar ->mennyiseg = $request->mennyiseg;
            $kosar ->save();
        }

    }

    public function kosarbolTorol($id){
        $user = Auth::user()->f_azon;
        $kosar = Kosar::where('user_id', $user)->where('termek', $id);
        $kosar->delete();

    }













    /*public function kosarhozAd(Request $request) {
        $termek = Termek::findOrFail($request->id);
        $termekek = $request->session()->get("termekek", null);
        if ($termekek == null) {
            // Ha a "termekek" változó még nem létezik, létrehozunk egy új tömböt a kiválasztott termékkel
            $termekek = [
                ["id" => $request->id, "mennyiseg" => $request->mennyiseg]
            ];
        } else {
            // Ellenőrizni kell, hogy a kiválasztott termék már szerepel-e a "termekek" tömbben
            $termekIndex = array_search($request->id, array_column($termekek, 'id'));
            if ($termekIndex !== false) {
                // Ha a termék már szerepel, akkor csak növeljük a mennyiséget
                $termekek[$termekIndex]['mennyiseg'] += $request->mennyiseg;
            } else {
                // Ha a termék még nem szerepel, akkor hozzáadjuk a listához
                $termekek[] = ["id" => $request->id, "mennyiseg" => $request->mennyiseg];
            }
        }

        Session::put("termekek", $termekek);
        return \session()->get("termekek");
        //return redirect()->back()->with('success', 'A terméket sikeresen hozzáadtuk a kosárhoz!');
    }*/


    /*public function kosarbolTorol($id)
    {
        $termekek = session('cart', []);

        foreach ($termekek as $index => $item) {
            if ($item['termek']['termek_id'] == $id) {
                unset($termekek[$index]);
            }
        }

        session(['cart' => $termekek]);
    }*/





    }
