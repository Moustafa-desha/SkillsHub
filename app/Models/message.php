<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;

        //to till laravel this column fillabel by Opposite way usesr can't insert in this column 
        protected $guarded = ['id','created_at', 'updated_at'];

  
        
}
