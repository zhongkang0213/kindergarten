<?php

namespace App\Admin\Models\Meal;

use Illuminate\Database\Eloquent\Model;

class RecipeFood extends Model
{
    protected $table = 'meal_recipe_food';

    public function food()
    {
        return $this->hasOne(Food::class, 'id', 'food_id');
    }
}
