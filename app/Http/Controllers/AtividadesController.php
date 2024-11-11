<?php

namespace App\Http\Controllers;

use App\Models\Atividades;
use Exception;
use Illuminate\Http\Request;

class AtividadesController extends Controller
{
    public function index()
    {
        return view('atividades', ['atividades'=>Atividades::all()]);
    }

    public function show($id)
    {
        return view('atividades', ['atividades' => Atividades::find($id)]);
    }

    public function create(){
        return view('atividades_create');
    }

    public function store(Request $req){
        $atividades = $req->all();

        if(Atividades::create($atividades)){
            return redirect('/atividades');
        }else {
            dd("Erro ao inserir Atividades!!");
        }
    }

    public function edit($id){
        return view('atividades_edit',[
            'atividades'=>Atividades::find($id)
        ]);
    }

    public function update(Request $request,$id){
        $Atividades = $request->all();

        try{
            Atividades::findOrFail($id)->update($Atividades);
            return redirect('/atividades');
        }catch(Exception $error){
            dd($error);
        }
    }

    public function destroy($id){
        try{
            Atividades::destroy($id);
            return redirect('/atividades');
        }catch(Exception $error){
            dd($error);
        }
    }

    public function delete($id)
    {
        return view('atividades_remove', ['atividades' => Atividades::find($id)]);
    }

    public function remove(Request $req, $id)
    {
        if($req->confirmar==="Deletar")
            if(!Atividades::destroy($id))
                dd("Erro ao deletar $id !");
            return redirect('/atividades');
    }

}
