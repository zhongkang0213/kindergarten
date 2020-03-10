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

    public function orders()
    {
        return $this->hasMany(StockOutOrder::class, 'stock_id', 'id');
    }

    public function getPriceAttribute($price)
    {
        return $price / 100;
    }

    public function getRemainAttribute($remain)
    {
        return $this->amount  - $this->deliver_amount;
    }
}
