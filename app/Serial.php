<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Serial extends Model implements SluggableInterface
{
    use SluggableTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'country', 'production', 'producer', 'actors', 'description', 'images', 'released',
    ];


    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    /**
     * Get seasins for serial.
     */
    public function seasons()
    {
        return $this->hasMany('App\Season');
    }

    /**
     * Validation rules
     */
    public static $rules = array(
        'name' => 'required',
        'released' => 'date'
    );

}
