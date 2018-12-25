<?php
namespace App\Events\Backend\Inventory;

use Illuminate\Queue\SerializesModels;
/**
 * Class InventoryCreated.
 */
class InventoryCreated
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
