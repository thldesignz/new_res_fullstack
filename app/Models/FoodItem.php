<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    use HasFactory;

    protected $table = 'food_items';

    protected $fillable = [
        'title', 'description', 'image_url', 'price', 'category_id'
    ];

    public function categories(){
    return $this->belongsTo('App\FoodCategory');
    }
    // return $this->belongsTo(User::class);

}


