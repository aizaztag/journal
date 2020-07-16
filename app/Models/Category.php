<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function journals()
    {
        return $this->hasMany('App/Models/Journal');
    }

    public function setDateAttribute( $value ) {
        //$this->attributes['date'] = (new Carbon($value))->format('d/m/y');
    }
}
