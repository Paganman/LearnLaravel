<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
		'customerNumber',
		'customerName',
		'contactLastName',
		'contactFirstName',
		'phone',
		'addressLine1',   
		'addressLine2',
		'city',
		'state',
		'postalCode',
		'country',
		'salesRepEmployeeNumber',
		'creditLimit'
    ];
    
    protected $hidden = [
       
    ];

    public function orders()
    {
    	return $this->hasMany(Order::class,'customerNumber');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class,'customerNumber');
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}

