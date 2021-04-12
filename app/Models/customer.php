<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    
    protected $table = 'customer';
    protected $fillable=[
        'cid','uid','customer_name','customer_email','customer_number','country','state','city',
        'customer_address','customer_postcode'
    ];
}
