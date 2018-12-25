<?php namespace App\Events\Backend\Inventory;

use Illuminate\Queue\SerializesModels;
/**
 * Class InventoryDeleted.
 */

class InventoryDeleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $inventory;

    /**
     * @param $inventory
     */
    public function __construct($inventory)
    {
        $this->inventory = $inventory;
    }
}
