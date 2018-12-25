<?php namespace App\Events\Backend\BoxSighting;

use Illuminate\Queue\SerializesModels;
/**
 * Class BoxSightingDeleted.
 */

class BoxSightingDeleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $box_sighting;

    /**
     * @param $box_sighting
     */
    public function __construct($box_sighting)
    {
        $this->box_sighting = $box_sighting;
    }
}
