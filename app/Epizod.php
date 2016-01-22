<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Epizod extends Model implements SluggableInterface
{
    use SluggableTrait;

    public $table = "epizodes";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'date_start', 'images', 'directed', 'production', 'producer', 'running_time'
    ];


    protected $sluggable = [
        'build_from' => ['name'] ,
        'save_to'    => 'slug',
    ];



}
