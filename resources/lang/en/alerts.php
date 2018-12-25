<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Alert Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain alert messages for various scenarios
    | during CRUD operations. You are free to modify these language lines
    | according to your application's requirements.
    |
    */

    'backend' => [
        'roles' => [
            'created' => 'The role was successfully created.',
            'deleted' => 'The role was successfully deleted.',
            'updated' => 'The role was successfully updated.'
        ],

        'users' => [
            'cant_resend_confirmation' =>
                'The application is currently set to manually approve users.',
            'confirmation_email' =>
                'A new confirmation e-mail has been sent to the address on file.',
            'confirmed' => 'The user was successfully confirmed.',
            'created' => 'The user was successfully created.',
            'deleted' => 'The user was successfully deleted.',
            'deleted_permanently' => 'The user was deleted permanently.',
            'restored' => 'The user was successfully restored.',
            'session_cleared' => "The user's session was successfully cleared.",
            'social_deleted' => 'Social Account Successfully Removed',
            'unconfirmed' => 'The user was successfully un-confirmed',
            'updated' => 'The user was successfully updated.',
            'updated_password' =>
                "The user's password was successfully updated."
        ]
    ],

    'frontend' => [
        'contact' => [
            'sent' =>
                'Your information was successfully sent. We will respond back to the e-mail provided as soon as we can.'
        ],

        //start_Level_start
        'level' => [
            'saved' => 'Level saved successfully.',
            'updated' => 'Level updated successfully.',
            'deleted' => 'Level deleted successfully.'
        ],
        //end_Level_end

        //start_Gem_start
        'gem' => [
            'saved' => 'Gem saved successfully.',
            'updated' => 'Gem updated successfully.',
            'deleted' => 'Gem deleted successfully.'
        ],
        //end_Gem_end

        //start_Player_start
        'player' => [
            'saved' => 'Player saved successfully.',
            'updated' => 'Player updated successfully.',
            'deleted' => 'Player deleted successfully.'
        ],
        //end_Player_end

        //start_Box_start
        'box' => [
            'saved' => 'Box saved successfully.',
            'updated' => 'Box updated successfully.',
            'deleted' => 'Box deleted successfully.'
        ],
        //end_Box_end

        //start_Item_start
        'item' => [
            'saved' => 'Item saved successfully.',
            'updated' => 'Item updated successfully.',
            'deleted' => 'Item deleted successfully.'
        ],
        //end_Item_end

        //start_Inventory_start
        'inventory' => [
            'saved' => 'Inventory saved successfully.',
            'updated' => 'Inventory updated successfully.',
            'deleted' => 'Inventory deleted successfully.'
        ],
        //end_Inventory_end

        //start_LevelGem_start
        'level_gem' => [
            'saved' => 'LevelGem saved successfully.',
            'updated' => 'LevelGem updated successfully.',
            'deleted' => 'LevelGem deleted successfully.'
        ],
        //end_LevelGem_end

        //start_GemSighting_start
        'gem_sighting' => [
            'saved' => 'GemSighting saved successfully.',
            'updated' => 'GemSighting updated successfully.',
            'deleted' => 'GemSighting deleted successfully.'
        ],
        //end_GemSighting_end

        //start_BoxSighting_start
        'box_sighting' => [
            'saved' => 'BoxSighting saved successfully.',
            'updated' => 'BoxSighting updated successfully.',
            'deleted' => 'BoxSighting deleted successfully.'
        ],
        //end_BoxSighting_end

        //start_BoxGem_start
        'box_gem' => [
            'saved' => 'BoxGem saved successfully.',
            'updated' => 'BoxGem updated successfully.',
            'deleted' => 'BoxGem deleted successfully.'
        ],
        //end_BoxGem_end

        //start_BoxItem_start
        'box_item' => [
            'saved' => 'BoxItem saved successfully.',
            'updated' => 'BoxItem updated successfully.',
            'deleted' => 'BoxItem deleted successfully.'
        ]
        //end_BoxItem_end

        // Do not delete me :) I'm used for auto-generation
    ]
];
