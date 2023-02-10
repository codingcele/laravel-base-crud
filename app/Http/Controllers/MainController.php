<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
    public function home() {

        $saints = Saint::orderBy('created_at', 'DESC') -> get();

        $data = [
            'saints' => $saints
        ];

        return view('pages.home', $data);
    }

    public function show($id) {

        $saint = Saint::find($id);

        $data = [
            'saint' => $saint
        ];
        
        return view('pages.saint', $data);
    }

    public function saintDestroy($id) {

        $saint = Saint::find($id);
        $saint -> delete();

        return redirect() -> route('home');
    }

    public function saintCreate() {

        return view('pages.saintCreate');
    }

    public function saintStore(Request $request) {

        $data = $request -> all();

        $saint = new Saint();

        $saint -> nome = $data['nome'];
        $saint -> luogoNascita = $data['luogoNascita'];
        $saint -> dataBenedizione = $data['dataBenedizione'];
        $saint -> numeroMiracoli = $data['numeroMiracoli'];

        $saint -> save();

        return redirect() -> route('home');
    }
}