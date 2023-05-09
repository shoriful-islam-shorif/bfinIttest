<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['id','Product_Name', 'Category', 'description'];

    public function invoice() {
        return $this->hasOneTo(invoice::class);
    }
    use HasFactory;
}



