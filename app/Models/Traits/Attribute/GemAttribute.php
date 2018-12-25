<?php

namespace App\Models\Traits\Attribute;

/**
 * Trait GemAttribute.
 */
trait GemAttribute
{
    /**
     * @return   gem
     */
    public function getViewButtonAttribute()
    {
        return '<a href="' .
            route('admin.gem.show', $this) .
            '" data-toggle="tooltip" data-placement="top" title="' .
            __('buttons.general.crud.view') .
            '" class="btn btn-info"><i class="fas fa-eye"></i></a>';
    }

    /**
     * @return string  gem
     */
    public function getEditButtonAttribute()
    {
        return '<a href="' .
            route('admin.gem.edit', $this) .
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
            route('admin.gem.destroy', $this) .
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
    public function getGemSightingsButtonAttribute()
    {
        return '<a href="' .
            route('admin.gem_sighting.gem', $this) .
            ' " class="dropdown-item">' .
            __('GemSightings') .
            '</a> ';
    }

    /**
     * @return  string
     */
    public function getBoxesButtonAttribute()
    {
        return '<a href="' .
            route('admin.box.gem', $this) .
            ' " class="dropdown-item">' .
            __('Boxes') .
            '</a> ';
    }

    /**
     * @return  string
     */
    public function getPlayersButtonAttribute()
    {
        return '<a href="' .
            route('admin.player.gem', $this) .
            ' " class="dropdown-item">' .
            __('Players') .
            '</a> ';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div
       class="btn-group btn-group-sm" gem="group" aria-label="Gem Actions">
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
