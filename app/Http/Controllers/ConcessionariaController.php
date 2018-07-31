<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Concessionaria;             
use App\Http\Requests\ConcessionariaFormRequest;
use DB;

class ConcessionariaController extends Controller
{
    //
    public function __construct(){
        //
       $this->middleware('auth');
       
    }
    
   
    public function index(Request $request){
        
                if($request){
                    $query=trim($request->get('searchText'));
                    $concessionarias=DB::table('concessionarias')
                    ->where('nome', 'LIKE', '%'.$query.'%')
                    ->where('endereco', 'LIKE', '%'.$query.'%')
                    ->where('numero', 'LIKE', '%'.$query.'%')
                    ->where('bairro', 'LIKE', '%'.$query.'%')
                    ->where('cidade', 'LIKE', '%'.$query.'%')
                    ->where('uf', 'LIKE', '%'.$query.'%')
                    ->where('complemento', 'LIKE', '%'.$query.'%')
                    ->orderBy('idConcessionaria', 'asc')
                    ->paginate(7);
                    return view('concessionaria.index', [
                        "concessionarias"=>$concessionarias, "searchText"=>$query
                        ]);
                }
            }
       
    public function create(){
    	return view("concessionaria.create");
    }
 
    public function store(ConcessionariaFormRequest $request){
    	$concessionarias = new Concessionaria;
		$concessionarias->nome=$request->get('nome');
		$concessionarias->endereco=$request->get('endereco');
        $concessionarias->numero=$request->get('numero');
        $concessionarias->bairro=$request->get('bairro');
        $concessionarias->cidade=$request->get('cidade');
        $concessionarias->uf=$request->get('uf');
        $concessionarias->complemento=$request->get('complemento');
        $concessionarias->cep=$request->get('cep');
        $concessionarias->telefone=$request->get('cep');
    	$concessionarias->save();
    	return Redirect::to('concessionarias');
    }
    public function show($idConcessionaria){
    	return view("concessionaria.show", 
            ["concessionaria"=>Concessionaria::findOrFail($idConcessionaria)]);
            
    }   
    public function edit($idConcessionaria){
    	return view("concessionaria.edit", 
			["concessionaria"=>Concessionaria::findOrFail($idConcessionaria)]);
    }
    public function update(ConcessionariaFormRequest $request, $idConcessionaria){
    	$concessionaria=Concessionaria::findOrFail($idConcessionaria);
		$concessionaria->nome=$request->get('nome');
		$concessionaria->endereco=$request->get('endereco');
        $concessionaria->numero=$request->get('numero');
        $concessionaria->bairro=$request->get('bairro');
        $concessionaria->cidade=$request->get('cidade');
        $concessionaria->uf=$request->get('uf');
        $concessionaria->complemento=$request->get('complemento');
        $concessionaria->cep=$request->get('cep');
    	$concessionaria->update();
    	return Redirect::to('concessionarias');
    }
    public function destroy($idConcessionaria){
    	$concessionaria=Concessionaria::findOrFail($idConcessionaria);
    	$concessionaria->delete();
    	return Redirect::to('concessionarias');
    }
}
