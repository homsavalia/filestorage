<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class file_uploade extends Model
{
    
    protected $table = 'file_uploade';
    protected $fillable=[
        'cid','uid','file_name'
    ];
}
