<?php
namespace App\Listeners\Backend;

/**
 * Class InventoryEventListener.
 */
/**
 * Class InventoryCreated.
 */
class InventoryEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Inventory Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Inventory  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Inventory Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Inventory\InventoryCreated::class,
            'App\Listeners\Backend\InventoryEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Inventory\InventoryUpdated::class,
            'App\Listeners\Backend\InventoryEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Inventory\InventoryDeleted::class,
            'App\Listeners\Backend\InventoryEventListener@onDeleted'
        );
    }
}
