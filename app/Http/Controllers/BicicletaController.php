<?php

namespace App\Http\Controllers;

use App\Models\Bicicleta;
use Illuminate\Http\Request;

class BicicletaController extends Controller
{
    private $bicicleta;

    public function __construct()
    {
        $this->bicicleta = new Bicicleta();
    }

    public function index()
    {
        return view('bicicletas', ['bicicletas'=>Bicicleta::all()]);
    }

    public function show($id)
    {
        return view('bicicleta', ['bicicleta' => Bicicleta::find($id)]);
    }
}
