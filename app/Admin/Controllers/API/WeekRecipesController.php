<?php

namespace App\Admin\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Admin\Models\Meal\RecipeTags as MealRecipeTags;
use App\Admin\Models\Meal\Recipes as MealRecipes;

class WeekRecipesController extends Controller
{
    public function categories()
    {
        $result = MealRecipes::all();
        $items = [];
        foreach ($result as $v) {
            $items[$v['tag_id']][] = [
                'id' => $v->id,
                'name' => $v->name,
            ];
        }

        $result = MealRecipeTags::all();
        
        foreach ($result as $v) {
            $vv = [
                'id' => $v->id,
                'name' => $v->name,
                'recipes' => $items[$v->id],
            ];

            $data[] = $vv;
        }

        return ['data' => $data];
    }

    public function store(Request $request)
    {
        $planId = $request->input('plan_id');
        $weekId = $request->input('week_id');
        $markId = $request->input('mark_id');
        $recipeId = $request->input('recipe_id');
        $weight = $request->input('weight');
        //dd($request->input('recipe_id'));
        dd(MealRecipes::find($recipeId));
    }
}
