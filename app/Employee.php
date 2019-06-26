<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
		'employeeNumber',
		'lastName',
		'firstName',
		'extension',
		'email',
		'officeCode',
		'reportsTo',
		'jobTitle'
    ];
    
    protected $hidden = [
       
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class,'saleRepEmployeeNumber');
    }

    public function employees()
    {
        return $this->
    }
}
