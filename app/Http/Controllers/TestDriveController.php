<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\TestDrive;
use App\Http\Requests\TestDriveFormRequest;
use DB;

class TestDriveController extends Controller
{
    //
    public function __construct(){
		//
		$this->middleware('auth');
    }

    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
    		$testDrives=DB::table('testDrives')
            ->where('data', 'LIKE', '%'.$query.'%')
            ->where('hora', 'LIKE', '%'.$query.'%')
            ->orderBy('idTestDrives', 'asc')
    		->paginate(7);
    		return view('testDrive.index', [
    			"testDrives"=>$testDrives, "searchText"=>$query
    			]);
        }
    }
    public function create(){
    	return view("testDrive.create");
    }
 
    public function store(TestDriveFormRequest $request){
    	$testDrives = new TestDrive;
		$testDrives->data=$request->get('data');
        $testDrives->hora=$request->get('hora');
        $testDrives->save();
    	return Redirect::to('testDrives');
    }
    public function show($idTestDrives){
    	return view("testDrive.show", 
    		["testDrives"=>TestDrive::findOrFail($idTestDrives)]);
    }
    public function edit($idTestDrives){
    	return view("testDrive.edit", 
			["testDrives"=>TestDrive::findOrFail($idTestDrives)]);
    }
    public function update(TestDriveFormRequest $request, $idTestDrives){
    	$testDrives=TestDrive::findOrFail($idTestDrives);
		$testDrives->data=$request->get('data');
		$testDrives->hora=$request->get('hora');
        $testDrives->update();
    	return Redirect::to('testDrives');
    }
    public function destroy($idTestDrives){
    	$testDrives=TestDrive::findOrFail($idTestDrives);
    	$testDrives=DB::table('testDrives')->where('idTestDrives', '=', $idTestDrives)->delete();
    	return Redirect::to('testDrives');
    }

    

}
