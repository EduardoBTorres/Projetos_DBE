<?php

namespace App\Http\Controllers;

use App\Models\Bicicleta;
use Exception;
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

    public function edit($id){
        return view('bicicleta_edit',[
            'bicicleta'=>Bicicleta::find($id)
        ]);
    }

    public function update(Request $request,$id){
        $bicicleta = $request->all();

        try{
            Bicicleta::findOrFail($id)->update($bicicleta);
            return redirect('/bicicletas');
        }catch(Exception $error){
            dd($error);
        }
    }

    // public function delete($id)
    // {
    //     if(Bicicleta::find($id)->delete())
    //         return redirect('/bicicletas');
    //     else dd($id);
    // }

    // public function destroy($id){
    //     try{
    //         Bicicleta::destroy($id);
    //         return redirect('/bicicletas');
    //     }catch(Exception $error){
    //         dd($error);
    //     }
    // }

    public function delete($id)
    {
        return view('bicicletas_remove', ['bicicleta' => Bicicleta::find($id)]);
    }

    public function remove(Request $req, $id)
    {
        if($req->confirmar==="Deletar")
            if(!Bicicleta::destroy($id))
                dd("Erro ao deletar $id !");
            return redirect('/bicicletas');
    }

}
