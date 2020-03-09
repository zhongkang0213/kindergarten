<?php

namespace App\Admin\Models\Storage;

use Illuminate\Database\Eloquent\Model;
use App\Admin\Models\Meal\Food;

class Stock extends Model
{
    protected $table = 'storage_stocks';

    public function food()
    {
        return $this->hasOne(Food::class, 'id', 'food_id');
    }
}
