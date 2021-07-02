<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\User;
use App\Models\Centro; 
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;

class CitaController extends Controller
{

    public function index(){
        $citas = User::find(Auth::id())->citas; 
        return view("citas.index", compact('citas') ); 
    }
    public function create(){
        $centros = Centro::get();
        
        return view('citas.create', compact('centros')); 
    
    }
    public function store(Request $request){
        
        $validated = $request->validate(['centro_id' => 'required|string|max:255', 
            'fecha' =>'required|string|min:8|max:255',]);
        
        $cita = new cita();
        $user= User::find(Auth::id()); 
        //$centro = Centro::find($request->centro_id);
        
        $cita -> user_id = $user->id;
        $cita -> centro_id = $request->centro_id;
        $cita -> fecha = $request -> fecha; 
       
        $cita -> save();
        
        return Redirect()->route('citas.index'); 
        //Cita::create($request-> all()); 
    }
    public function show(Cita $cita){ 
    
        return view('citas.show', compact('cita')); 
    }
    public function edit(Cita $cita){
        
        $centros = Centro::get();
        return view('citas.editar', compact ('cita','centros')); 
        
    }
    public function update(Request $request,Cita $cita){
        $cita->update($request->all()); 
        return redirect()->route('citas.index');
    }
    public function destroy(Cita $cita){
        $cita ->delete();
        return redirect()->route('citas.index'); 
    }
    public function returnCitas(){


    }
    public function inicio(){

        return view('citas.inicio'); 
    }
}
?>