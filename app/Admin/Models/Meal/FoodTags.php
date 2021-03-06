<?php

namespace App\Admin\Models\Meal;

use Illuminate\Database\Eloquent\Model;

class FoodTags extends Model
{
    protected $table = 'meal_food_tags';

    public function subcode()
    {
        return $this->hasMany(FoodSubTags::class, 'supcode', 'code');
    }
}
