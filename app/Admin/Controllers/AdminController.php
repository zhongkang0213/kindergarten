<?php

namespace App\Admin\Controllers;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Controllers\AdminController as BaseAdminController;

class AdminController extends BaseAdminController
{
    protected function schoolId()
    {
        $schools = Admin::user()->school;
        $first = $schools->first();
        
        return $first ? $first->id : 0;
    }
}
