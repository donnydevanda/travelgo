<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        
    ];

    public function travel_package(){
        return $this->belongsTo(TravelPackage::class, 'categories_id', 'id');
    }
}
