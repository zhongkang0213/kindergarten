<?php

namespace App\Admin\Controllers\Info;

use App\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Models\Info\Teachers as InfoTeachers;

class TeachersController extends AdminController
{
    protected $title = '老师';

    protected function grid()
    {
        $grid = new Grid(new InfoTeachers);
        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'));
        $grid->column('entry_date', __('入职时间'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

        $grid->model()->where('school_id', $this->schoolId());

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new InfoTeachers);
        
        $form->hidden('school_id')->default($this->schoolId());

        $form->tab('基本信息', function($form) {
            $form->text('name', __('姓名'));
            $form->text('phone', __('手机'));

            $form->radio('gender', __('性别'))->options(['m' => '女', 'f'=> '男'])->default('m');

        })->tab('个人信息', function($form) {
            $form->datetime('entertime', __('入职时间'))->format('YYYY-MM-DD');
            $form->datetime('birthday', __('生日'))->format('YYYY-MM-DD');
            $form->select('nation', __('民族'))->options([
                '汉族' => '汉族',
                '满族'=> '满族',
                '回族' => '回族'
            ])->default('汉族');

            $form->image('avatar', __('头像'));

            $form->select('degree', __('学历'))->options([
                1 => '大学',
                2 => '高中',
            ]);

            $form->text('graduation', __('毕业院校'));
            
            $form->text('address', __('住址'));
            $form->textarea('notes', __('备注'))->rows(10);
        });
                
        return $form;
    }
}



