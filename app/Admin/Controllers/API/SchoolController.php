<?php

namespace App\Admin\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Admin\Models\Info\Classes as InfoClasses;

class SchoolController extends Controller
{
    public function nature(Request $request)
    {
        $type = $request->get('q');

        if ($type == 1) {
            return [
                ['id' => 1, 'text' => '教委直营'],
                ['id' => 2, 'text' => '政府机关'],
                ['id' => 3, 'text' => '部队所属'],
                ['id' => 4, 'text' => '企事业直营'],
                ['id' => 5, 'text' => '普惠园'],
            ];
        } elseif ($type == 2) {
            return [
                ['id' => 5, 'text' => '普惠园'],
                ['id' => 6, 'text' => '独立'],
                ['id' => 7, 'text' => '集团直营'],
                ['id' => 8, 'text' => '集团加盟'],
            ];
        }
    }
}
