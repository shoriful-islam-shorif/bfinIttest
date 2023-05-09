<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['id','item_code', 'Customer_id','Product_id','Currency','item_description','quantity','unite_price','discount','total_price'];
    public function customer(){
        return $this->belongsTo(customer::class,'Customer_id');

    }
    public function product(){
        return $this->belongsTo(product::class,'Product_id');

    }
    use HasFactory;
}
