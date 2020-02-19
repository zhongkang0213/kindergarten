<?php

namespace App\Admin\Models\Meal;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    protected $table = 'meal_recipes';

    public function food()
    {
        return $this->belongsToMany(Food::class, 'meal_recipe_food', 'recipe_id', 'food_id')
            ->withTimestamps();
    }

    public function recipe_food()
    {
        return $this->hasMany(RecipeFood::class, 'recipe_id', 'id');
    }
}
