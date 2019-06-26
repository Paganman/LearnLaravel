<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    //
    protected $fillable = [
        'productLine',
        'textDescription',
        'htmlDescription',
        'image'
    ];
    
    protected $hidden = [
       
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'productLine');
    }
}
