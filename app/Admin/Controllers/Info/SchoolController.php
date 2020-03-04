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
    }
}
