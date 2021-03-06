<?php

namespace App\Admin\Controllers\Meal;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
use App\Admin\Models\Meal\RecipeTags as MealRecipeTags;
use App\Admin\Models\Meal\Recipes as MealRecipes;
use App\Admin\Models\Meal\Food as MealFood;
use App\Admin\Widgets\Iframe;

class RecipesController extends AdminController
{
    protected $title = '食谱';

    public function edit($id, Content $content)
    {
        $iframe = new Iframe([
            'path' => "foods",
            'params' => ['recipe_id' => $id],
        ]);

        return $content->body($iframe);
    }

    protected function grid()
    {
        $grid = new Grid(new MealRecipes);
        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'));
        $grid->column('pinyin', __('拼音'));

        $grid->actions(function ($actions) {
            $actions->disableDelete();
            //$actions->disableEdit();
            $actions->disableView();
        });

        //$grid->disableCreateButton();
        $grid->disableRowSelector();
        $grid->disableColumnSelector();
        //$grid->disableTools();
        $grid->disableExport();


        $grid->column('food', __('食材'))->display(function ($food) {

            $food = array_map(function ($v) {
                return "<span class='label label-success'>{$v['name']}</span>";
            }, $food);

            return join('&nbsp;', $food);
        });

        $grid->model()->orderBy('id', 'desc');
       
        /*        
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));
        */
        
        return $grid;
    }

    protected function form()
    {
        $form = new Form(new MealRecipes);

        $form->display('id', __('ID'));
        $form->text('name', __('名称'));
        $form->text('pinyin', __('拼音'));

        $form->select('tag_id', __('食谱标签'))->options(function() {
            $tags = MealRecipeTags::all()->pluck('name', 'id');
            return $tags;
        });

        /*
        $form->multipleSelect('food', __('食材'))->options(function() {
            $food = MealFood::all()->pluck('name', 'id');
            return $food;
        });
        */

        $form->saving(function(Form $form) {
            //dd($form);
        });
        
        return $form;
    }
}

