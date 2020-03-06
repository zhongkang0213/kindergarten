<?php

namespace App\Admin\Controllers\Info;

use App\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Models\Info\Grades as InfoGrades;
use App\Admin\Models\Info\Classes as InfoClasses;
use App\Admin\Models\Info\Students as InfoStudents;

class StudentsController extends AdminController
{
    protected $title = '宝宝';

    protected function grid()
    {
        $grid = new Grid(new InfoStudents);
        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'));
        $grid->column('sno', __('学号'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

        $grid->model()->where('school_id', $this->schoolId());

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new InfoStudents);
        
        $form->hidden('school_id')->default($this->schoolId());

        $form->tab('宝宝信息', function($form) {
            $form->text('name', __('名称'));
            $form->text('sno', __('学号'));
            $form->select('grade_id', __('年级'))->options(
                InfoGrades::all()->pluck('name', 'id')
            )->load('class_id','/admin/api/classes/search');

            $form->select('class_id', __('班级'))->options(function($id) {
                return InfoClasses::where('grade_id', $id)->get()->pluck('name', 'id');
            });

            $form->radio('gender', __('性别'))->options(['m' => '小公主', 'f'=> '小王子'])->default('m');

            $form->select('nation', __('民族'))->options([
                '汉族' => '汉族',
                '满族'=> '满族',
                '回族' => '回族'
            ])->default('汉族');

            $form->datetime('birthday', __('生日'))->format('YYYY-MM-DD');
            $form->datetime('entertime', __('入园日期'))->format('YYYY-MM-DD');
        })->tab('家庭信息', function($form) {
            $form->text('fa_name', __('父亲姓名'));
            $form->mobile('fa_phone', __('父亲电话'));
            $form->text('fa_company', __('父亲单位'));

            $form->text('mo_name', __('母亲姓名'));
            $form->mobile('mo_phone', __('母亲电话'));
            $form->text('mo_company', __('母亲单位'));
            
            $form->textarea('address', __('住址'))->rows(10);
        })->tab('其他信息', function($form) {
            //--在园，毕业，离园标记 1 在园 2 毕业 0 离园
            $form->select('flag', __('标示'))->options([
                '0' => '离园',
                '1' => '在园',
                '2' => '毕业',
            ]);

            $form->textarea('notes', __('备注'))->rows(10);
        });
                
        return $form;
    }
}



