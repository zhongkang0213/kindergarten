<?php

namespace App\Admin\Controllers\Info; 

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Models\Info\School as InfoSchool;

class SchoolController extends AdminController 
{
    protected $title = '园所';
    
    protected function grid()
    {
        $grid = new Grid(new InfoSchool);

        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'));
        $grid->column('schoolmaster', __('园长'));

        return $grid;
    }

    protected function form()
    {
       $form = new Form(new InfoSchool);
       
       $form->display('id', __('ID'));
       $form->text('name', __('名称'));
       $form->text('schoolmaster', __('园长'));
       
       $form->select('type', __('园所类型'))->options(function() {
           return [
               1 => '公立',
               2 => '民办',
           ];
       })->load('nature', '/admin/api/school/nature');

       $form->select('nature', __('性质'));

       $form->select('tuition_scope', __('费用'))->options(function() {
           return [
               1 => '1000元以下',
               2 => '1000-3000元',
               3 => '3000-5000元',
               4 => '5000-10000元',
               5 => '100000-50000元',
               6 => '5万元以上',
           ];
       });

       return $form;
    }
}
