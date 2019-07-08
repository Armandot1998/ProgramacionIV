<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Product;
use App\Recipe;
use App\Unit;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function getIngredients(){
        $ingredients = Ingredient::all();
        return response()->json(['Ingredients' => $ingredients], 200);
    }

    public function getIngredientById($id){
        $ingredients = Ingredient::where('id', '=', $id)->get();
        return response()->json(['ingredients' => $ingredients], 200);     
    } 

    
    public function postIngredients(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataIngredient=$dataBodyClient['ingredient'];
        $dataProduct=$dataBodyClient['product'];
        $dataRecipe=$dataBodyClient['recipe'];
        $dataUnit=$dataBodyClient['unit'];

        $product = Product::find($dataProduct['id']);
        $recipe = Recipe::find($dataRecipe['id']);
        $unit = Unit::find($dataUnit['id']);
        $response =  $product->product() || $recipe->recipe() || $unit->unit()->create([
        'quantity'=>$dataProduct['name'],
        'description'=>$dataProduct['description'],
        'cost'=>$dataProduct['cost'],
        'isactive'=>$dataProduct['isactive']]);
        $product->associate()->units($unit);
        $product->units()->associate($unit);
        $product->save();
        return $response;
    }
    //asociate

    public function putIngredient(Request $request, $id){
        $product = Product::find($id);
        $response = $product->update([
            "quantity"=>$request->quantity,
            "description"=>$request->description,
            "cost"=>$request->cost,
            "recipe_id"=>$request->recipe_id,
            "unit_id"=>$request->unit_id,
            "product_id"=>$request->product_id,
            "isactive"=>$request->isactive]);

        return response()->json($response, 201); 
    }
}
