<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    public function getProducts(){
        $products = Product::all();
        return $products;
    } 

    public function getProductById($id){
        $products = Product::where('id', '=', $id)->get();
        return  $products;   
    } 
 
    public function postProducts(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataProduct=$dataBodyClient['product'];
        $dataCategory=$dataBodyClient['categories'];

        $category = Category::find($dataCategory['id']);
        $response =  $category->products()->create([
        'name'=>$dataProduct['name'],
        'isactive'=>$dataProduct['isactive']]);
        return $response;
    }

    public function putProduct(Request $request, $id){
        $product = Product::find($id);
        $response = $product->update([
            "name"=>$request->name,
            "isactive"=>$request->isactive,
            "category_id"=>$request->category_id]);
        return response()->json($response, 201); 
    }

}
