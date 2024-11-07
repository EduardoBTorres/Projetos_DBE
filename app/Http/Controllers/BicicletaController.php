<?php

namespace App\Http\Controllers;

use App\Models\Bicicleta;
use Illuminate\Http\Request;

class BicicletaController extends Controller
{

    public function index()
    {
        return view('bicicletas', ['bicicletas'=>Bicicleta::all()]);
    }

    public function show($id)
    {
        return view('bicicleta', ['bicicleta' => Bicicleta::find($id)]);
    }

    public function create(){
        return view('bicicleta_create');
    }

    public function store(Request $req){
        $bicicleta = $req->all();

        if(Bicicleta::create($bicicleta)){
            return redirect('/bicicletas');
        }else {
            dd("Erro ao inserir Bicicleta!!");
        }
    }
}
