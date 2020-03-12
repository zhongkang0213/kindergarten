<?php

namespace App\Admin\Models\Storage;

use Illuminate\Database\Eloquent\Model;

class StockOutOrder extends Model
{
    protected $fillable = [
        'user_id', 'stock_id', 'food_id',
        'amount', 'type',
    ];

    protected $table = 'storage_stock_out_orders';

    public function getTypeAttribute($type)
    {
        return $type == 0 ? '过期' : '出库';
    }
}
