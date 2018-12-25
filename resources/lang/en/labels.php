<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'copyright' => 'Copyright',
        'custom' => 'Custom',
        'actions' => 'Actions',
        'active' => 'Active',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update'
        ],
        'hide' => 'Hide',
        'inactive' => 'Inactive',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
        'create_new' => 'Create New',
        'toolbar_btn_groups' => 'Toolbar with button groups',
        'more' => 'More',
        'none' => 'None'
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total'
                ]
            ],

            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',
                'user_actions' => 'User Actions',

                'table' => [
                    'confirmed' => 'Confirmed',
                    'created' => 'Created',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Name',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'abilities' => 'Abilities',
                    'roles' => 'Roles',
                    'social' => 'Social',
                    'total' => 'user total|users total'
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history' => 'History'
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Confirmed',
                            'created_at' => 'Created At',
                            'deleted_at' => 'Deleted At',
                            'email' => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => 'Last Updated',
                            'name' => 'Name',
                            'first_name' => 'First Name',
                            'last_name' => 'Last Name',
                            'status' => 'Status',
                            'timezone' => 'Timezone'
                        ]
                    ]
                ],

                'view' => 'View User'
            ]
        ],

        //start_Level_start
        'levels' => [
            'management' => ' Levels Management',
            'create' => 'Create Level',
            'view' => 'View Level',
            'edit' => 'Edit Level',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'description' => "Description",
                'visible_radius' => "Visible Radius",
                'order' => "Order",
                'sort' => 'Sort',
                'total' => ' Levels total| Levels total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_Level_end

        //start_Gem_start
        'gems' => [
            'management' => ' Gems Management',
            'create' => 'Create Gem',
            'view' => 'View Gem',
            'edit' => 'Edit Gem',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'description' => "Description",
                'level_id' => "Level",
                'clickable_radius' => "Clickable Radius",
                'sort' => 'Sort',
                'total' => ' Gems total| Gems total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_Gem_end

        //start_Player_start
        'players' => [
            'management' => ' Players Management',
            'create' => 'Create Player',
            'view' => 'View Player',
            'edit' => 'Edit Player',

            'table' => [
                'id' => "Id",
                'name' => "Full Name",
                'token' => "Token",
                'birth_date' => "Birth Date",
                'level_id' => "Level",
                'sort' => 'Sort',
                'total' => ' Players total| Players total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_Player_end

        //start_Box_start
        'boxes' => [
            'management' => ' Boxes Management',
            'create' => 'Create Box',
            'view' => 'View Box',
            'edit' => 'Edit Box',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'description' => "Description",
                'clickable_radius' => "Clickable Radius",
                'level_id' => "Level",
                'sort' => 'Sort',
                'total' => ' Boxes total| Boxes total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_Box_end

        //start_Item_start
        'items' => [
            'management' => ' Items Management',
            'create' => 'Create Item',
            'view' => 'View Item',
            'edit' => 'Edit Item',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'description' => "Description",
                'clickable_radius' => "Clickable Radius",
                'sort' => 'Sort',
                'total' => ' Items total| Items total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_Item_end

        //start_Inventory_start
        'inventory' => [
            'management' => ' Inventories Management',
            'create' => 'Create Inventory',
            'view' => 'View Inventory',
            'edit' => 'Edit Inventory',

            'table' => [
                'id' => "Id",
                'player_id' => "Player",
                'inventoryable_id' => "Inventoryable Id",
                'inventoryable_type' => "Inventoryable Type",
                'count' => "Count",
                'sort' => 'Sort',
                'total' => ' Inventories total| Inventories total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_Inventory_end

        //start_LevelGem_start
        'level_gems' => [
            'management' => ' Level Gems Management',
            'create' => 'Create LevelGem',
            'view' => 'View LevelGem',
            'edit' => 'Edit LevelGem',

            'table' => [
                'id' => "Id",
                'gem_id' => "Gem Name",
                'level_id' => "Level Name",
                'count' => "Count",
                'sort' => 'Sort',
                'total' => ' Level Gems total| Level Gems total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_LevelGem_end

        //start_GemSighting_start
        'gem_sightings' => [
            'management' => ' Gem Sightings Management',
            'create' => 'Create GemSighting',
            'view' => 'View GemSighting',
            'edit' => 'Edit GemSighting',

            'table' => [
                'id' => "Id",
                'gem_id' => "Gem",
                'player_id' => "Player",
                'founded_at' => "Founded At",
                'lat' => "Lat",
                'lng' => "Lng",
                'sort' => 'Sort',
                'total' => ' Gem Sightings total| Gem Sightings total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_GemSighting_end

        //start_BoxSighting_start
        'box_sightings' => [
            'management' => ' Box Sightings Management',
            'create' => 'Create BoxSighting',
            'view' => 'View BoxSighting',
            'edit' => 'Edit BoxSighting',

            'table' => [
                'id' => "Id",
                'player_id' => "Player",
                'box_id' => "Box",
                'founded_at' => "Founded At",
                'lat' => "Lat",
                'lng' => "Lng",
                'sort' => 'Sort',
                'total' => ' Box Sightings total| Box Sightings total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_BoxSighting_end

        //start_BoxGem_start
        'box_gems' => [
            'management' => ' Box Gems Management',
            'create' => 'Create BoxGem',
            'view' => 'View BoxGem',
            'edit' => 'Edit BoxGem',

            'table' => [
                'id' => "Id",
                'gem_id' => "Gem Name",
                'box_id' => "Box Name",
                'count' => "Count",
                'sort' => 'Sort',
                'total' => ' Box Gems total| Box Gems total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_BoxGem_end

        //start_BoxItem_start
        'box_items' => [
            'management' => ' Box Items Management',
            'create' => 'Create BoxItem',
            'view' => 'View BoxItem',
            'edit' => 'Edit BoxItem',

            'table' => [
                'id' => "Id",
                'item_id' => "Item Name",
                'box_id' => "Box Name",
                'sort' => 'Sort',
                'total' => ' Box Items total| Box Items total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ]
        //end_BoxItem_end

        // Do not delete me :) I'm used for auto-generation
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me'
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information'
        ],

        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'update_password_button' => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link'
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password'
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'update_information' => 'Update Information'
            ]
        ]
    ]
];
