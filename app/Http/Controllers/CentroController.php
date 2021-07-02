<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;
use App\Models\Centro; 
class CentroController extends Controller
{
    public function index(){

        return view('centro.index'); 
    }
   
    public function create(){

        return view('centro.create');
    }
    public function store(Request $request){
        return view('centro.show'); 
    }
    public function show(Centro $centro){ 

    }
    public function edit(Centro $centro){

    }
    public function update(Request $request, Centro $centro){

    }
    public function destroy(Centro $centro){

    }
    public function oncologo(){
        return view('centro.oncologo');
    }
    public function dermatologo(){

        return view('centro.dermatologo');
    }
    public function pediatra(){
        return view('centro.pediatra');
    }
    public function oftarmologo(){

        return view('centro.oftarmologo');
    }
}
