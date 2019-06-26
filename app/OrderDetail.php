<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $fillable = [
		'orderNumber',
		'productCode',
		'quantityOrdered',
		'priceEach',
		'orderLineNumber'
   	];
    
    protected $hidden = [
       
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    
    public function orders()
    {
        return $this->belongsToMany(ProductLine::class);
    }
}
