<?php

namespace App\Admin\Models\Meal;

use Illuminate\Database\Eloquent\Model;

class WeekRecipeDetails extends Model
{
    // 后面可以更新表名为meal_week_recipe_details
    protected $table = 'meal_plan_details';

    protected $fillable = ['plan_id', 'week_id', 'mark_id', 'recipe_id', 'weight'];
}

