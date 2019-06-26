<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
   	protected $fillable = [
		'officeCode',
		'city',
		'phone',
		'addressLine1',
		'addressLine2',
		'state',
		'country',
		'postalCode',
		'territory'
    ];
    
    protected $hidden = [
       
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class,'officeCode');
    }
}
