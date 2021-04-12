<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
   
    protected $table = 'company';
    protected $fillable = [
       'uid', 'company_name','customFile','company_email','company_number','country',
        	'state','city','company_address','company_postcode','is_delete'
	];
    
}
