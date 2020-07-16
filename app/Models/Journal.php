<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    public function user()
    {
        return $this->belongsTo('App/Models/User');
    }

    public function category()
    {
        return $this->belongsTo('App/Models/Category');
    }
}
