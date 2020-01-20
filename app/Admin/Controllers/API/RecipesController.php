<?php

namespace App\Admin\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Admin\Models\Meal\Recipes as MealRecipes;
use App\Admin\Models\Meal\RecipeTags as MealRecipesTags;

class RecipesController extends Controller
{
    public function categories()
    {
        $result = MealRecipesTags::all();

        return ['data' => $result->toArray()];
    }

    public function store()
    {
        $planId = Request::input('plan_id');
        $weekId = Request::input('week_id');
        $markId = Request::input('mark_id');
        $recipeId = Request::input('recipe_id');
        $weight = Request::input('weight');

        dd(Recipes::find($recipeId));

        return ['data' => []];
    }
}
