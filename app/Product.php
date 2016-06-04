<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'category_id',
        'slug',
        'name',
        'subname',
        'description',
        'price',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function colors()
    {
        return $this->hasMany('App\Color');
    }

    public function subimages()
    {
        return $this->hasMany('App\Subimage');
    }

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }

    public function votesCount()
    {
        return $this->votes()
            ->raw('sum(vote) as total_vote')
            ->groupBy('votes.product_id');
    }
}
