<?php

namespace App\Admin\Controllers;

use Illuminate\Support\Facades\Auth;
use Encore\Admin\Controllers\AuthController as BaseAuthController;
use Illuminate\Http\Request;

class AuthController extends BaseAuthController
{
    // 返回当前登陆用户对应的园所ID
    /*
    public function redirectTo()
    {
        $schools = $this->guard()->user()->school;
        
        $schoolId = $schools->first()->id;

        return "admin/{$schoolId}";
    }
    */

    // 临时先重写改方法  因为找不到redirect guest写入的地方
    protected function sendLoginResponse(Request $request)
    {
        admin_toastr(trans('admin.login_successful'));

        $request->session()->regenerate();

        $schools = $this->guard()->user()->school();

        $request->session()->put('school_id', $schools->first()->id);

        return redirect($this->redirectPath());
    }
}
