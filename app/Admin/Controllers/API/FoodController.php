<?php

namespace App\Admin\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Admin\Models\Meal\Food as MealFood;
use App\Admin\Models\Meal\FoodTags as MealFoodTags;
use App\Admin\Models\Meal\FoodSubTags as MealFoodSubTags;

class FoodController extends Controller
{
    public function categories()
    {
        $result = MealFood::all();
        
        foreach ($result as $f) {
            $food[$f['code']][$f['subcode']][] = [
                'id' => $f->id,
                'name' => $f->name,
                'energy_kcal' => $f->energy_kcal,
            ];
        }

        $result = MealFoodTags::all();
        
        foreach ($result as $v) {
            $sub = [];
            foreach ($v->subcode as $item) {
                $foods = isset($food[$item->supcode][$item->code]) ? $food[$item->supcode][$item->code]: [];
                $sub[] = ['id' => $item->id, 'name' => $item->name, 'foods' => $foods];
            }
            
            $vv = [
                'id' => $v->id,
                'name' => $v->name,
                'sub' => $sub,
            ];

            $data[] = $vv;
        }


        $rsp = [
            'data' => $data,
        ];

        return $rsp;
    }
}
