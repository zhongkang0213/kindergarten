<?php

namespace App\Admin\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Admin\Models\Meal\Recipes as MealRecipes;
use App\Admin\Models\Meal\RecipeFood as MealRecipeFood;
use App\Admin\Models\Meal\RecipeTags as MealRecipesTags;
use App\Admin\Models\Meal\Food as MealFood;

class RecipesController extends Controller
{
    public function categories()
    {
        $result = MealRecipesTags::all();

        return ['data' => $result->toArray()];
    }

    public function edit(Request $request)
    {
        $recipeId = $request->get('recipe_id');

        $recipe = MealRecipes::find($recipeId);

        $foods= [];
        foreach ($recipe->recipe_food as $v) {
        
            $food = [
                'id' => $v->id,
                'food_id' => $v->food_id,
                'name' => $v->food_name,
                'weight' => $v->food_weight,
                'energy_kcal' => $v->food->energy_kcal,
            ];

            $foods[] = $food;
        }

        $data = [
            'recipe' => [
                'id' => $recipe->id,
                'name' => $recipe->name,
                'tag_id' => $recipe->tag_id,
                'foods' => $foods,
            ],
        ];

        return ['data' => $data];
    }

    public function store(Request $request)
    {
        $recipeId = $request->get('recipe_id');
        $tagId = $request->get('tag_id');
        $name = $request->get('name');
        
        $foods = collect($request->get('foods'))->keyBy('id');

        $result = MealFood::whereIn('id', $foods->keys()->toArray())
                ->get();

        $recipeFoods = [];
        foreach ($result as $v) {
            $recipeFood = [
                'food_id' => $v->id,
                'recipe_id' => $recipeId,
                'food_name' => $v->name,
                'food_weight' => $foods[$v->id]['weight'],
                'food_code' => $v->code,
                'food_subcode' => $v->subcode,
            ];

            $recipeFoods[] = $recipeFood;
        }

        DB::transaction(function() use ($recipeId, $tagId, $name, $recipeFoods) {
            DB::table("meal_recipe_food")->where('recipe_id', $recipeId)
                ->delete();

            DB::table('meal_recipes')->where('id', $recipeId)
                ->update(['tag_id' => $tagId, 'name' => $name]);

            DB::table("meal_recipe_food")->insert($recipeFoods);
        });

        return [
            'data'=> [
                'tag_id' => $tagId,
                'name' => $name,
                'foods' => $recipeFoods
            ]
        ];
    }
}
