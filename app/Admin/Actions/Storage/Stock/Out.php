<?php

namespace App\Admin\Actions\Storage\Stock;

use Encore\Admin\Actions\RowAction;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Admin\Models\Storage\StockOutOrder;

class Out extends RowAction
{
    public $name = '出库';

    public function form()
    {
        $this->integer('deliver_amount', __('出库数量'));
    }

    public function handle(Model $model, Request $request)
    {
        DB::transaction(function () use ($model, $request) {
            $deliverAmount = $request->get('deliver_amount');
            $userId = Admin::user()->id;

            $model->increment('deliver_amount', $deliverAmount);
            
            StockOutOrder::create([
                'user_id' => $userId,
                'stock_id' => $model->id,
                'food_id' => $model->food_id,
                'amount' => $deliverAmount,
                'type' => 1,
            ]);
        });

        return $this->response()->success('Success message.')->refresh();
    }

}
