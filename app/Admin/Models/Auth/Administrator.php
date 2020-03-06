<?php

namespace App\Admin\Models\Auth;

use Encore\Admin\Auth\Database\Administrator as BaseAdministrator;
use App\Admin\Models\Info\School;

class Administrator extends BaseAdministrator
{
    public function school()
    {
        //虽然使用的是一对多模型  但是表中存储的是一对一关系 
        //这样的目的是不做原框架表的侵入
        return $this->belongsToMany(School::class, 'admin_school_users', 'user_id', 'school_id');
    }

    public function schoolId()
    {
        return $this->school->first()->school_id;
    }
}
