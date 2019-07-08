<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getCategories(){
        $categories = Category::all();
        return  $categories;
     
    }
    
    public function getCategoryById($id){
        $categories = Category::where('id', '=', $id)->get();
        return response()->json(['categories' => $categories], 200);     
    } 

    public function postCategories(Request $request){
        $categories = new Category();
        $categories->name = $request->name;
        $categories->isactive = $request->isactive;
        $categories->save();
        return response()->json(['Categories' => $categories], 200);  
    } 
    
    public function putCategory(Request $request, $id){
        $category = Category::find($id);
        $response = $category->update([
            "name"=>$request->name,
            "isactive"=>$request->isactive]);
        return response()->json($response, 201); 
    }
}
