<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
		'customerNumber',
		'checkNumber',
		'paymentDate',
		'amount'
    ];
    
    protected $hidden = [
       
    ];

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
}
