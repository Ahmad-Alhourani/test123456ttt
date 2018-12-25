<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//start_Level_start
Route::resource('level', 'API\LevelAPIController');

//end_Level_end

//start_Gem_start
Route::resource('gem', 'API\GemAPIController');

//end_Gem_end

//start_Player_start
Route::resource('player', 'API\PlayerAPIController');

//end_Player_end

//start_Box_start
Route::resource('box', 'API\BoxAPIController');

//end_Box_end

//start_Item_start
Route::resource('item', 'API\ItemAPIController');

//end_Item_end

//start_Inventory_start
Route::resource('inventory', 'API\InventoryAPIController');

//end_Inventory_end

//*****Do Not Delete Me
