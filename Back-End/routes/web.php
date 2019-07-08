<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'cors'], function(){

Route::get('/categories', 'CategoriesController@getCategories');
Route::get('/categories/{id}', 'CategoriesController@getCategoryById');
Route::post('/categories', 'CategoriesController@postCategories');
Route::put('/categories/{id}', 'CategoriesController@putCategory');

Route::get('/products', 'ProductsController@getProducts');
Route::get('/products/{id}', 'ProductsController@getProductById');
Route::post('/products', 'ProductsController@postProducts');
Route::put('/product/{id}', 'ProductsController@putProduct');

Route::get('/ingredients', 'IngredientsController@getIngredients');
Route::get('/ingredient/{id}', 'IngredientsController@getIngredientById');
//Route::post('/ingredients', 'IngredientsController@postIngredients');
Route::put('/ingredient/{id}', 'IngredientsController@putIngredient');

Route::get('/techniques', 'TechniquesController@getTechniques');
Route::get('/technique/{id}', 'TechniquesController@getTechniqueById');
Route::post('/techniques', 'TechniquesController@postTechniques');
Route::put('/technique/{id}', 'TechniquesController@putTechnique');

Route::get('/recipes', 'RecipesController@getRecipes');
Route::get('/recipe/{id}', 'RecipesController@getRecipeById');
Route::post('/recipes', 'RecipesController@postRecipes');
Route::put('/recipe/{id}', 'RecipesController@putRecipe');

Route::get('/units', 'UnitsController@getUnits');
Route::get('/unit/{id}', 'UnitsController@getUnitById');
Route::post('/units', 'UnitsController@postUnits');
Route::put('/unit/{id}', 'UnitsController@putUnit');

Route::get('/processes', 'ProcessesController@getProcesses');
Route::get('/processe/{id}', 'ProcessesController@getProcesseById');
Route::post('/processes', 'ProcessesController@postProcesses');
Route::put('/processe/{id}', 'ProcessesController@putProcesse');
});