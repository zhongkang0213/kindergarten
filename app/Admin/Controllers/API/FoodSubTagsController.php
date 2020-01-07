<?php

namespace App\Admin\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Admin\Models\Meal\FoodSubTags as MealFoodSubTags;

class FoodSubTagsController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->get('q');

        return MealFoodSubTags::Where('supcode', $q)->get([
            DB::raw('code as id'), DB::raw('name as text'),
        ]);
    }
}



