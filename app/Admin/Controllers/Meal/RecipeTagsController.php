<?php

namespace App\Admin\Controllers\Meal;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Models\Meal\RecipeTags as MealRecipeTags;

class RecipeTagsController extends AdminController
{
    protected $title = '食谱标签';
    
    protected function grid()
    {
        $grid = new Grid(new MealRecipeTags);
        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new MealRecipeTags);

        $form->display('id', __('ID'));
        $form->text('name', __('名称'));

        $form->listbox('demo', __('demo'))->options();


        return $form;
    }
}



