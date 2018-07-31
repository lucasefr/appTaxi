<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Usuario;
use App\Http\Requests\UsuarioFormRequest;
use DB;

class UsuarioController extends Controller
{
    //
    public function __construct(){
		//
		$this->middleware('auth');
    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
    		$usuarios=DB::table('usuarios')
            ->where('nome', 'LIKE', '%'.$query.'%')
            ->where('email', 'LIKE', '%'.$query.'%')
            ->where('placaDoCarro', 'LIKE', '%'.$query.'%')
            ->where('idAparelho', 'LIKE', '%'.$query.'%')
            ->where('telefone', 'LIKE', '%'.$query.'%')
    		->orderBy('idUsuarios', 'asc')
    		->paginate(7);
    		return view('usuario.index', [
    			"usuarios"=>$usuarios, "searchText"=>$query
    			]);
        }
    }
    public function create(){
    	return view("usuario.create");
    }
 
    public function store(UsuarioFormRequest $request){
    	$usuarios = new Usuario;
		$usuarios->nome=$request->get('nome');
        $usuarios->email=$request->get('email');
        $usuarios->telefone=$request->get('telefone');
        $usuarios->placaDoCarro=$request->get('placaDoCarro');
		$usuarios->idAparelho=$request->get('idAparelho');
    	$usuarios->save();
    	return Redirect::to('usuarios');
    }
    public function show($idUsuarios){
    	return view("usuario.show", 
    		["usuarios"=>Usuario::findOrFail($idUsuarios)]);
    }
    public function edit($idUsuarios){
    	return view("usuario.edit", 
			["usuarios"=>Usuario::findOrFail($idUsuarios)]);
    }
    public function update(UsuarioFormRequest $request, $idUsuarios){
    	$usuarios=Usuario::findOrFail($idUsuarios);
		$usuarios->nome=$request->get('nome');
		$usuarios->email=$request->get('email');
        $usuarios->telefone=$request->get('telefone');
        $usuarios->placaDoCarro=$request->get('placaDoCarro');
		$usuarios->idAparelho=$request->get('idAparelho');
    	$usuarios->update();
    	return Redirect::to('usuarios');
    }
    public function destroy($idUsuarios){
    	$usuarios=Usuario::findOrFail($idUsuarios);
    	$usuarios=DB::table('usuarios')->where('idUsuarios', '=', $idUsuarios)->delete();
    	return Redirect::to('usuarios');
    }

    

}
