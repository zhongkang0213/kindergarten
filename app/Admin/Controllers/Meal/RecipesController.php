<?php

namespace App\Admin\Controllers\Meal;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Models\Meal\RecipeTags as MealRecipeTags;
use App\Admin\Models\Meal\Recipes as MealRecipes;
use App\Admin\Models\Meal\Food as MealFood;

class RecipesController extends AdminController
{
    protected $title = '食谱';

    protected function grid()
    {
        $grid = new Grid(new MealRecipes);
        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'));

        $grid->column('food', __('食材'))->display(function ($food) {

            $food = array_map(function ($v) {
                return "<span class='label label-success'>{$v['name']}</span>";
            }, $food);

            return join('&nbsp;', $food);
        });
        
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new MealRecipes);

        $form->display('id', __('ID'));
        $form->text('name', __('名称'));

        $form->select('tag_id', __('食谱标签'))->options(function() {
            $tags = MealRecipeTags::all()->pluck('name', 'id');
            return $tags;
        });

        $form->multipleSelect('food', __('食材'))->options(function() {
            $food = MealFood::all()->pluck('name', 'id');
            return $food;
        });

        $form->saving(function(Form $form) {
            //dd($form);
        });
        
        return $form;
    }
}

