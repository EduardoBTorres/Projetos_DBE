<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('users', ['users'=>User::all()]);
    }

    public function show($id)
    {
        return view('user', ['user' => User::find($id)]);
    }

    public function create(){
        return view('user_create');
    }

    public function store(Request $req){
        $user = $req->all();

        if(User::create($user)){
            return redirect('/users');
        }else {
            dd("Erro ao inserir User!!");
        }
    }

    public function edit($id){
        return view('user_edit',[
            'user'=>User::find($id)
        ]);
    }

    public function update(Request $request,$id){
        $user = $request->all();

        try{
            User::findOrFail($id)->update($user);
            return redirect('/users');
        }catch(Exception $error){
            dd($error);
        }
    }

    public function destroy($id){
        try{
            User::destroy($id);
            return redirect('/users');
        }catch(Exception $error){
            dd($error);
        }
    }

    public function delete($id)
    {
        return view('user_remove', ['user' => User::find($id)]);
    }

    public function remove(Request $req, $id)
    {
        if($req->confirmar==="Deletar")
            if(!User::destroy($id))
                dd("Erro ao deletar $id !");
            return redirect('/users');
    }

}
