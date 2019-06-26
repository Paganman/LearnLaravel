<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
		'orderNumber',
		'orderDate',
		'requiredDate',
		'shippedDate',
		'status',
		'comments',
		'customerNumber'
    ];
    
    protected $hidden = [
       
    ];

    public function orderdetails()
    {
        return $this->hasMany(OrderDetail::class,'orderNumber');
    }
    
    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
}
