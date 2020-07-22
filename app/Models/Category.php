<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{

    protected $fillable = [
        'name', 'slug', 'launched', 'issn', 'current_issue', 'if' , 'icon'
    ];

    public static $rules = [
        'name'      =>  'required|max:191|unique:categories',
        //'launched'  =>  'required',
        'issn'      =>  'required',
        'icon'     =>  'mimes:jpg,jpeg,png|max:1000'
    ];

    public function journals()
    {
        return $this->hasMany('App/Models/Journal');
    }

    public function setDateAttribute( $value ) {
        //$this->attributes['date'] = (new Carbon($value))->format('d/m/y');
    }

    public function setSlugAttribute( $value ) {
        //$this->attributes['slug'] =  Str::slug($value);//strtolower(current(explode(' ' , $value)));
        $this->attributes['slug'] =    strtolower(current(explode(' ' , $value)));
    }
}
