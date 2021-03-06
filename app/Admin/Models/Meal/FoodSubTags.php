<?php

namespace App\Admin\Models\Meal;

use Illuminate\Database\Eloquent\Model;

class FoodSubTags extends Model
{
    protected $table = 'meal_food_sub_tags';

    public function food()
    {
        return $this->hasMany(Food::class, 'code', 'supcode');
    }
}



