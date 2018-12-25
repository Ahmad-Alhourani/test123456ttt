<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Attribute\BoxAttribute;
use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use Storage;

class Box extends Model
{
    use BoxAttribute, Eloquence, SoftDeletes, CascadeSoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        "name",
        "description",
        "clickable_radius",
        "level_id"
    ];

    public $timestamps = ["create_at", "update_at"];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = [
        'gemsCascade',
        'playersCascade',
        'itemsCascade'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'boxes';

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
     * Get all the box_sightings for the Box.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sightings()
    {
        return $this->hasMany(BoxSighting::class)->latest();
    }

    /**
     * Get all the gems for the Box.
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function requiredGems()
    {
        return $this->belongsToMany(Gem::class, 'box_gems')->withPivot([
            'count'
        ]);
    }

    /**
     * Get all the players for the Box.
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function players()
    {
        return $this->belongsToMany(Player::class, 'box_sightings')->withPivot([
            'lat',
            'lng'
        ]);
    }

    /**
     * Get all the items for the Box.
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function items()
    {
        return $this->belongsToMany(Item::class, 'box_items');
    }

    /**
     * Get  the Level that owns the Box.
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
     * Cascade Deletes for box_gems relation
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function gemsCascade()
    {
        return $this->hasMany(BoxGem::class, "box_id", "id");
    }

    /**
     * Cascade Deletes for box_sightings relation
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function playersCascade()
    {
        return $this->hasMany(BoxSighting::class, "box_id", "id");
    }

    /**
     * Cascade Deletes for box_items relation
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function itemsCascade()
    {
        return $this->hasMany(BoxItem::class, "box_id", "id");
    }
}
