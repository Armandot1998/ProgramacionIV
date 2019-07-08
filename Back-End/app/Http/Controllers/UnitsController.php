<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    public function getUnits(){
        $units = Unit::all();
        return response()->json(['Units' => $units], 200);
    }
    
    public function getUnitById($id){
        $units = Unit::where('id', '=', $id)->get();
        return response()->json(['Units' => $units], 200);     
    } 

    public function postUnits(Request $request){
        $units = new Unit();
        $units->name = $request->name;
        $units->quantity = $request->quantity;
        $units->isactive = $request->isactive;
        $units->save();
        return response()->json(['Units' => $units], 200);  
    } 
    
    public function putUnit(Request $request, $id){
        $units = Unit::find($id);
        $response =$units->update([
            "name"=>$request->name,
            "quantity"=>$request->quantity,
            "isactive"=>$request->isactive]);
        return response()->json($response, 201); 
    }
}
