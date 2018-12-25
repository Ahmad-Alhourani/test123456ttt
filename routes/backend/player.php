<?php

/**
 * Player Management
 * All route names are prefixed with 'admin.player'.
 */
Route::group(
    [
        'namespace' => 'Player',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Player CRUD
         */
        Route::resource('player', 'PlayerController');
        Route::get('level/{id}/players', 'PlayerController@level')->name(
            'player.level'
        );
    }
);
