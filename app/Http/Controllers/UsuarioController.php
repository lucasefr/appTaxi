<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario;
//use App\Http\Requests\UsuariosFormRequest;
use DB;

class UsuarioController extends Controller
{
    //
    public function __construct(){
		//
		//$this->middleware('auth');
    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
    		$usuarios=DB::table('usuarios')
            ->where('nome', 'LIKE', '%'.$query.'%')
            ->where('email', 'LIKE', '%'.$query.'%')
            ->where('placaDoCarro', 'LIKE', '%'.$query.'%')
            ->where('telefone', 'LIKE', '%'.$query.'%')
    		->orderBy('id', 'asc')
    		->paginate(7);
    		return view('usuarios.index2', [
    			"usuarios"=>$usuarios, "searchText"=>$query
    			]);
        }
    }
    public function create(){
    	return view("usuarios.create");
    }
 
    public function store(UsuariosFormRequest $request){
    	$usuarios = new User;
		$usuarios->nome=$request->get('nome');
        $usuarios->email=$request->get('email');
        $usuarios->telefone=$request->get('telefone');
        $usuarios->placaDoCarro=$request->get('placaDoCarro');
		$usuarios->senha=bcrypt($request->get('senha'));
    	$usuarios->save();
    	return Redirect::to('usuarios');
    }
    public function show($id){
    	return view("usuarios.show", 
    		["usuarios"=>User::findOrFail($id)]);
    }
    public function edit($id){
    	return view("usuarios.edit", 
			["usuarios"=>User::findOrFail($id)]);
    }
    public function update(UsuariosFormRequest $request, $id){
    	$usuarios=User::findOrFail($id);
		$usuarios->nome=$request->get('nome');
		$usuarios->email=$request->get('email');
        $usuarios->telefone=$request->get('telefone');
        $usuarios->placaDoCarro=$request->get('placaDoCarro');
		$usuarios->senha=bcrypt($request->get('senha'));
    	$usuarios->update();
    	return Redirect::to('usuarios');
    }
    public function destroy($id){
    	$usuarios=User::findOrFail($id);
    	$usuarios=DB::table('usuarios')->where('id', '=', $id)->delete();
    	return Redirect::to('usuarios');
    }

    public function index2(){
		//
        //$this->middleware('auth');
        return view ('usuario.index');
    }

}
