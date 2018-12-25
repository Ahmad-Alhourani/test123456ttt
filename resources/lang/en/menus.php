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
            'items' => ' Items',
            //finish_Item_finish
            //begin_Inventory_begin
            'inventory' => ' Inventories',
            //finish_Inventory_finish
            //begin_LevelGem_begin
            'level_gems' => ' Level Gems',
            //finish_LevelGem_finish
            //begin_GemSighting_begin
            'gem_sightings' => ' Gem Sightings',
            //finish_GemSighting_finish
            //begin_BoxSighting_begin
            'box_sightings' => ' Box Sightings',
            //finish_BoxSighting_finish
            //begin_BoxGem_begin
            'box_gems' => ' Box Gems',
            //finish_BoxGem_finish
            //begin_BoxItem_begin
            'box_items' => ' Box Items'
            //finish_BoxItem_finish
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
        ],
        //end_Item_end

        //start_Inventory_start
        'inventory' => [
            'view' => 'View Inventory',
            'all' => 'All  Inventories',
            'create' => 'Create Inventory',
            'edit' => 'Edit Inventory',
            'management' => 'Inventory Management',
            'main' => ' Inventories'
        ],
        //end_Inventory_end

        //start_LevelGem_start
        'level_gems' => [
            'view' => 'View LevelGem',
            'all' => 'All  Level Gems',
            'create' => 'Create LevelGem',
            'edit' => 'Edit LevelGem',
            'management' => 'LevelGem Management',
            'main' => ' Level Gems'
        ],
        //end_LevelGem_end

        //start_GemSighting_start
        'gem_sightings' => [
            'view' => 'View GemSighting',
            'all' => 'All  Gem Sightings',
            'create' => 'Create GemSighting',
            'edit' => 'Edit GemSighting',
            'management' => 'GemSighting Management',
            'main' => ' Gem Sightings'
        ],
        //end_GemSighting_end

        //start_BoxSighting_start
        'box_sightings' => [
            'view' => 'View BoxSighting',
            'all' => 'All  Box Sightings',
            'create' => 'Create BoxSighting',
            'edit' => 'Edit BoxSighting',
            'management' => 'BoxSighting Management',
            'main' => ' Box Sightings'
        ],
        //end_BoxSighting_end

        //start_BoxGem_start
        'box_gems' => [
            'view' => 'View BoxGem',
            'all' => 'All  Box Gems',
            'create' => 'Create BoxGem',
            'edit' => 'Edit BoxGem',
            'management' => 'BoxGem Management',
            'main' => ' Box Gems'
        ],
        //end_BoxGem_end

        //start_BoxItem_start
        'box_items' => [
            'view' => 'View BoxItem',
            'all' => 'All  Box Items',
            'create' => 'Create BoxItem',
            'edit' => 'Edit BoxItem',
            'management' => 'BoxItem Management',
            'main' => ' Box Items'
        ]
        //end_BoxItem_end

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
