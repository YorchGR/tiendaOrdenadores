<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informatico;

class InformaticoController extends Controller
{
  
    public function index(){
        return response()->json(Informatico::all(), 200);  
    }
    
    
    public function store(Request $request){
         try{
             $obj = Informatico::create($request->all());
             return response()->json($obj->id, 200);
        }catch(\Exception $e){
             return response()->json($obj->id, 200);
        }
        
    }

   
    public function show($id){
        $informatico = Informatico::find($id);
        if($informatico !=null){
            $ordenador = $informatico->montajes;
        }
        return response()->json($informatico, 200);
    }


    public function update(Request $request, $id){
        try{
            $informatico = Informatico::find($id);
            $resultado = $informatico->update($request->all());
            return response()->json($resultado = true, 200);
            
        }catch(\Exception $e){
            return response()->json(["resultado"=>false], 200);
        }
    }

    
    public function destroy($id){
       try{
            $resultado = Informatico::destroy($id);
        }catch(\Exception $e){
            $resultado = -1;
        }
        return response()->json($resultado, 200);  
    }
}
