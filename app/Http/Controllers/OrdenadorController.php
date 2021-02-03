<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordenador;

class OrdenadorController extends Controller
{
    
    public function index(){
        return response()->json(Ordenador::all(), 200);
    }

    /*function io(Request $request) {
        $obj = new Ordenador();
        $obj->fill($request->all());
        dd($obj);
    }*/
    
    public function store(Request $request){
        try{
            $obj = Ordenador::create($request->all());
            //dd($obj);
            return response()->json($obj->id, 200);
        }catch(\Exception $e){
             //var_dump($e);
             return response()->json($obj->id, 200);
        }
    }

    public function show($id){
          $ordenador = Ordenador::find($id);
        if($ordenador != null){
            $informatico = $ordenador->informatico;
        }
        return response()->json($ordenador, 200);
    }

    public function update(Request $request, $id){
         try{
            $ordenador = Ordenador::find($id);
            $resultado = $ordenador->update($request->all());
            return response()->json($resultado = true, 200);
        }catch(\Exception $e){
            return response()->json($resultado = false, 200);
        }
    }

    public function destroy($id){
        try{
            $resultado = Ordenador::destroy($id);
        }catch(\Exception $e){
            $resultado = -1;
        }
         return response()->json($resultado, 200);  
    }
}
