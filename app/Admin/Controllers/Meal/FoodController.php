<?php

namespace App\Admin\Controllers\Meal;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Models\Meal\Food as MealFood;
use App\Admin\Models\Meal\FoodTags as MealFoodTags;

class FoodController extends AdminController
{
    protected $title = '食材';

    protected function grid()
    {
        $grid = new Grid(new MealFood);
        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new MealFood);

        $form->tab('基本信息', function($form) {
            $form->text('name', __('名称'));
            $form->select('tag_id', __('食材标签'))->options(function() {
                $tags = MealFoodTags::all()->pluck('name', 'id');
                return $tags;
            });
            $form->text('pinyin', __('拼音'));
            $form->text('origin', __('产地'));
        })->tab('营养成分', function($form) {
            $form->decimal('nutrient.energy_kcal', __('能量Kcal'));
            $form->decimal('nutrient.fatty', __('脂肪'));
            $form->decimal('nutrient.dietary_fiber', __('膳食纤维'));
            $form->decimal('nutrient.carotene', __('胡萝卜素'));
            $form->decimal('nutrient.vitamin_c', __('维生素C'));
        });
            

        return $form;
    }
}
