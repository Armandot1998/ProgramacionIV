<?php

namespace App\Http\Controllers;

use App\Technique;
use Illuminate\Http\Request;

class TechniquesController extends Controller
{
    public function getTechniques(){
        $techniques = Technique::all();
        return response()->json(['techniques' => $techniques], 200);
    }

    public function getTechniqueById($id){
        $techniques = Technique::where('id', '=', $id)->get();
        return response()->json(['techniques' =>  $techniques], 200);     
    } 

    public function postTechniques(Request $request){
        $techniques = new Technique();
        $techniques->name = $request->name;
        $techniques->isactive = $request->isactive;
        $techniques->save();
        return response()->json(['techniques' => $techniques], 200);  
    } 
    
    public function putTechnique(Request $request, $id){
        $technique = Technique::find($id);
        $response = $technique->update([
            "name"=>$request->name,
            "isactive"=>$request->isactive]);
        return response()->json($response, 201); 
    }
}
