<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Attribute\GemAttribute;
use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use Storage;

class Gem extends Model
{
    use GemAttribute, Eloquence, SoftDeletes, CascadeSoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        "name",
        "description",
        "level_id",
        "clickable_radius"
    ];

    public $timestamps = ["create_at", "update_at"];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = ['gemSightingsCascade', 'boxesCascade'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gems';

    /**
     * Get the key name for route model binding.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'id';
    }

    // ***********************************************************
    // ***********************************************************
    // ************************ RELATIONS ************************
    // ***********************************************************
    // ***********************************************************

    /**
     * Get all the gem_sightings for the Gem.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sightings()
    {
        return $this->hasMany(GemSighting::class)->latest();
    }

    /**
     * Get all the boxes for the Gem.
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function boxes()
    {
        return $this->belongsToMany(Box::class, 'box_gems')->withPivot([
            'count'
        ]);
    }

    /**
     * Get all the players for the Gem.
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function players()
    {
        return $this->belongsToMany(Player::class, 'gem_sightings')->withPivot([
            'lat',
            'lng'
        ]);
    }

    /**
     * Get  the Level that owns the Gem.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    // ***********************************************************
    // ***********************************************************
    // ************************CASCADE  RELATIONS ****************
    // ***********************************************************
    // ***********************************************************

    /**
     * Cascade Deletes for gem_sightings relation
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function gemSightingsCascade()
    {
        return $this->hasMany(GemSighting::class, "gem_id", "id");
    }

    /**
     * Cascade Deletes for box_gems relation
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function boxesCascade()
    {
        return $this->hasMany(BoxGem::class, "gem_id", "id");
    }
}
