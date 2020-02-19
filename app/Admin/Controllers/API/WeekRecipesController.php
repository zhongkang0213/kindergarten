<?php

namespace App\Admin\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Admin\Models\Meal\RecipeTags as MealRecipeTags;
use App\Admin\Models\Meal\Recipes as MealRecipes;
use App\Admin\Models\Meal\WeekRecipeDetails as MealWeekRecipeDetails;

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

    public function update(Request $request)
    {
        $detailId = $request->get('detail_id');
        $weight = $request->get('weight');

        MealWeekRecipeDetails::where('id', $detailId)
            ->update(['weight' => $weight]);

        return ['data' => ['detail_id' => $detailId]];
    }

    public function edit(Request $request)
    {
        $planId = $request->get('plan_id');

        $plan = MealWeekRecipeDetails::where('plan_id', $planId)
              ->get();


        foreach ($plan as $v) {
            //$result[$v['week_id']][$v['mark_id']][] = $v;
            $recipeIds[] = $v['recipe_id'];
        }

        $recipes = MealRecipes::whereIn('id', $recipeIds)
                 ->get();

        $recipesMap = $recipes->keyBy('id');

        foreach ($plan as $v) {
            $item = $v;
            $item['recipe'] = $recipesMap[$v['recipe_id']]->toArray();
            $data[$v['week_id']][$v['mark_id']][] = $item;
        }

        return ['data' => $data];
    }

    public function store(Request $request)
    {
        $planId = $request->get('plan_id');
        $weekId = $request->get('week_id');
        $markId = $request->get('mark_id');
        $recipeId = $request->get('recipe_id');
        $weight = $request->get('weight');

        $data = [
            'plan_id' => $planId,
            'week_id' => $weekId,
            'mark_id' => $markId,
            'recipe_id' => $recipeId,
            'weight' => $weight,
        ];

        $detail = MealWeekRecipeDetails::create($data);

        $recipe = MealRecipes::find($recipeId);

        $data['detail_id'] = $detail->id;
        $data['recipe'] = $recipe->toArray();

        return ['data' => $data];
    }

    public function delete(Request $request)
    {
        $detailId = $request->get('detail_id');

        MealWeekRecipeDetails::where('id', $detailId)
            ->delete();

        return ['data' => ['detail_id' => $detailId]];
    }
}
