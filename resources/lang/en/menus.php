<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Access',

            'roles' => [
                'all' => 'All Roles',
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',
                'main' => 'Roles'
            ],

            'users' => [
                'all' => 'All Users',
                'change-password' => 'Change Password',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'main' => 'Users',
                'view' => 'View User'
            ]
        ],

        'log-viewer' => [
            'main' => 'Log Viewer',
            'dashboard' => 'Dashboard',
            'logs' => 'Logs'
        ],

        'sidebar' => [
            'dashboard' => 'Dashboard',
            'general' => 'General',
            'history' => 'History',
            'system' => 'System',

            //begin_Level_begin
            'levels' => ' Levels',
            //finish_Level_finish
            //begin_Gem_begin
            'gems' => ' Gems',
            //finish_Gem_finish
            //begin_Player_begin
            'players' => ' Players',
            //finish_Player_finish
            //begin_Box_begin
            'boxes' => ' Boxes',
            //finish_Box_finish
            //begin_Item_begin
            'items' => ' Items'
            //finish_Item_finish
            // **********Do_Not_Delete_me****************
        ],

        //start_Level_start
        'levels' => [
            'view' => 'View Level',
            'all' => 'All  Levels',
            'create' => 'Create Level',
            'edit' => 'Edit Level',
            'management' => 'Level Management',
            'main' => ' Levels'
        ],
        //end_Level_end

        //start_Gem_start
        'gems' => [
            'view' => 'View Gem',
            'all' => 'All  Gems',
            'create' => 'Create Gem',
            'edit' => 'Edit Gem',
            'management' => 'Gem Management',
            'main' => ' Gems'
        ],
        //end_Gem_end

        //start_Player_start
        'players' => [
            'view' => 'View Player',
            'all' => 'All  Players',
            'create' => 'Create Player',
            'edit' => 'Edit Player',
            'management' => 'Player Management',
            'main' => ' Players'
        ],
        //end_Player_end

        //start_Box_start
        'boxes' => [
            'view' => 'View Box',
            'all' => 'All  Boxes',
            'create' => 'Create Box',
            'edit' => 'Edit Box',
            'management' => 'Box Management',
            'main' => ' Boxes'
        ],
        //end_Box_end

        //start_Item_start
        'items' => [
            'view' => 'View Item',
            'all' => 'All  Items',
            'create' => 'Create Item',
            'edit' => 'Edit Item',
            'management' => 'Item Management',
            'main' => ' Items'
        ]
        //end_Item_end

        // Do not delete me :) I'm used for auto-generation
    ],

    'language-picker' => [
        'language' => 'Language',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar' => 'Arabic',
            'zh' => 'Chinese Simplified',
            'zh-TW' => 'Chinese Traditional',
            'da' => 'Danish',
            'de' => 'German',
            'el' => 'Greek',
            'en' => 'English',
            'es' => 'Spanish',
            'fa' => 'Persian',
            'fr' => 'French',
            'he' => 'Hebrew',
            'id' => 'Indonesian',
            'it' => 'Italian',
            'ja' => 'Japanese',
            'nl' => 'Dutch',
            'no' => 'Norwegian',
            'pt_BR' => 'Brazilian Portuguese',
            'ru' => 'Russian',
            'sv' => 'Swedish',
            'th' => 'Thai',
            'tr' => 'Turkish'
        ]
    ]
];
