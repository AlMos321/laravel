<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Season extends Model implements SluggableInterface
{
    use SluggableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'country', 'count_epizodes', 'date_start', 'date_end', 'description'
    ];


    protected $sluggable = [
        'build_from' => ['serial.name', 'id'] ,
        'save_to'    => 'slug',
    ];

    /**
     * Get epizodes for serial.
     */
    public function epizodes()
    {
        return $this->hasMany('App\Epizod');
    }

}
