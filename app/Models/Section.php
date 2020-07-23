<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'section_category', 'section_id', 'category_id');
    }

    public function availableSections($category_id)
    {
        $ids = \DB::table('section_category')->where('category_id', '=', $category_id)->pluck('section_id');
        return Section::whereNotIn('id', $ids)->get();
    }
}
