<?php

namespace App\Models\Traits\Attribute;

/**
 * Trait BoxAttribute.
 */
trait BoxAttribute
{
    /**
     * @return   box
     */
    public function getViewButtonAttribute()
    {
        return '<a href="' .
            route('admin.box.show', $this) .
            '" data-toggle="tooltip" data-placement="top" title="' .
            __('buttons.general.crud.view') .
            '" class="btn btn-info"><i class="fas fa-eye"></i></a>';
    }

    /**
     * @return string  box
     */
    public function getEditButtonAttribute()
    {
        return '<a href="' .
            route('admin.box.edit', $this) .
            '" data-toggle="tooltip" data-placement="top" title="' .
            __('buttons.general.crud.edit') .
            '" class="btn btn-primary"><i class="fas fa-edit"></i></a>';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        return '<a href="' .
            route('admin.box.destroy', $this) .
            '"
			 data-method="delete"
			 data-trans-button-cancel="' .
            __('buttons.general.cancel') .
            '"
			 data-trans-button-confirm="' .
            __('buttons.general.crud.delete') .
            '"
			 data-trans-title="' .
            __('strings.backend.general.are_you_sure') .
            '"
			 class="btn btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="' .
            __('buttons.general.crud.delete') .
            '"></i></a> ';
    }

    /**
     * @return  string
     */
    public function getBoxSightingsButtonAttribute()
    {
        return '<a href="' .
            route('admin.box_sighting.box', $this) .
            ' " class="dropdown-item">' .
            __('BoxSightings') .
            '</a> ';
    }

    /**
     * @return  string
     */
    public function getGemsButtonAttribute()
    {
        return '<a href="' .
            route('admin.gem.box', $this) .
            ' " class="dropdown-item">' .
            __('Gems') .
            '</a> ';
    }

    /**
     * @return  string
     */
    public function getPlayersButtonAttribute()
    {
        return '<a href="' .
            route('admin.player.box', $this) .
            ' " class="dropdown-item">' .
            __('Players') .
            '</a> ';
    }

    /**
     * @return  string
     */
    public function getItemsButtonAttribute()
    {
        return '<a href="' .
            route('admin.item.box', $this) .
            ' " class="dropdown-item">' .
            __('Items') .
            '</a> ';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div
       class="btn-group btn-group-sm" box="group" aria-label="Box Actions">
	   		 ' .
            $this->view_button .
            '
			  ' .
            $this->edit_button .
            '
			  ' .
            $this->delete_button .
            '
</div>
';
    }
}
