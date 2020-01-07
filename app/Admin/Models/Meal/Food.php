<?php

namespace App\Admin\Models\Meal;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'meal_food_nutrient';

    /*
    public function nutrient()
    {
        return $this->hasOne(Nutrient::class, 'food_id');
    }
    */
}



