<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
		'productCode',
		'productName',
		'productLine',
		'productScale',
		'productVendor',
		'productDescription',
		'quantityInStock',
		'buyPrice',
		'MSRP'
    ];
    
    protected $hidden = [
       
    ];

    public function productlines()
    {
        return $this->belongsTo(ProductLine::class);
    }
    
    public function orderdetails()
    {
        return $this->hasMany(OrderDetail::class,'productLine');
    }
}
