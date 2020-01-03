<?php

namespace App\Admin\Models\Meal;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $table = 'meal_recipes';

    public function food()
    {
        return $this->belongsToMany(Food::class, 'meal_recipe_food', 'recipe_id', 'food_id')
            ->withTimestamps();
    }
}
