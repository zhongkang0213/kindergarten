<?php

namespace App\Admin\Controllers\Storage;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;
use App\Admin\Controllers\AdminController;
use App\Admin\Models\Storage\Stock;
use App\Admin\Models\Storage\Supplier;
use App\Admin\Models\Meal\Food;
use App\Admin\Actions\Storage\Stock\Out;

class StocksController extends AdminController
{
    protected $title = '库存';

    protected function detail($id)
    {
        $show = new Show(Stock::findOrFail($id));

        $show->panel()
             ->tools(function ($tools) {
                 $tools->disableEdit();
                 //$tools->disableList();
                 $tools->disableDelete();
             });;
        
        
        $show->field('id', __('ID'));
        $show->field('food', __('食品'))->as(function($food) {
            return $food->name;
        });
        $show->field('produce_time', __('生产日期'));
        $show->field('price', __('单价'));
        $show->field('amount', __('数量(斤)'));
        $show->field('remain', __('剩余(斤)'));
        
        return $show;
    }

    public function grid() 
    {
        $grid = new Grid(new Stock);

        $grid->column('id', __('ID'))->sortable();

        $grid->column('food_id', __('食品'))
             ->display(function () {
                 return $this->food->name;
             })
             ->expand(function ($model) {

                 $orders = $model->orders->take(20)->map(function ($order) {
                     return $order->only(['user_id', 'amount', 'type', 'created_at']);
                 });

                 return new Table(['用户ID', '数量(斤)', '类型', '出库时间'], $orders->toArray());
        });

        $grid->column('produce_time', __('生产日期'));
        $grid->column('price', __('单价'));
        $grid->column('amount', __('数量(斤)'));
        $grid->column('remain', __('剩余'))->display(function() {
            return $this->amount - $this->deliver_amount;
        });

        $grid->actions(function ($actions) {
            $actions->add(new Out);
            $actions->disableDelete();
            $actions->disableEdit();
        });

        $grid->model()->where('school_id', $this->schoolId());

        $grid->disableExport();

        return $grid;
    }

    public function form()
    {
        $form = new Form(new Stock);

        $form->hidden('school_id')->default($this->schoolId());

        $form->text('contact', __('采购人'));
        $form->select('supplier_id', __('供应商'))
            ->options(Supplier::all()->pluck('name', 'id'));
        $form->select('food_id', __('食品'))
            ->options(Food::all()->pluck('name', 'id'));

        $form->number('amount', __('数量(斤)'));
        $form->currency('price', __('单价'))->symbol('￥');
        $form->date('purchase_time', __('采购时间'));
        $form->number('warn_amount', __('预警数量(斤)'));
        $form->date('produce_time', __('生产日期'));
        $form->number('shelf_life', '保质期(天)');

        //保存前回调
        $form->saving(function (Form $form) {
            $form->price = $form->price * 100;
        });

        return $form;
    }
}
