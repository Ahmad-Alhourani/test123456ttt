<?php

/**
 * Inventory Management
 * All route names are prefixed with 'admin.inventory'.
 */
Route::group(
    [
        'namespace' => 'Inventory',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Inventory CRUD
         */
        Route::resource('inventory', 'InventoryController');
        Route::get('player/{id}/inventory', 'InventoryController@player')->name(
            'inventory.player'
        );
    }
);
