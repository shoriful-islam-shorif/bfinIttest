<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{  
     protected $fillable = ['id','Customer_Name', 'Address', 'email'];
     public function invoice() {
        return $this->hasOneTo(invoice::class);
    }
    
    use HasFactory;
}
