<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Str;

class Corona extends Model
{
  use SoftDeletes;
  use Sluggable;

  /*
  |--------------------------------------------------------------------------
  | FUNCTIONS
  |--------------------------------------------------------------------------
  */
  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }

  public function getRouteKeyName()
  {
    return 'slug';
  }

    protected $fillable = ['title', 'image', 'description'];

  public function getSortDescriptionAttribute(){
    return ($this->description)? Str::words(strip_tags($this->description), 15, '...') : '';
  }
}
