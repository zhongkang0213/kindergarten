<?php

namespace App\Admin\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Admin\Models\Info\Classes as InfoClasses;

class ClassesController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->get('q');

        return InfoClasses::Where('grade_id', $q)->get([
            'id', DB::raw('name as text'),
        ]);
    }
}
