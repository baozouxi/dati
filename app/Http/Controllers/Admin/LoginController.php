<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {


        $this->validate($request, [
            'email' => 'required|email|exists:admins',
            'password' => 'string|required',
        ], [
            'email.required' => '请输入电子邮箱',
            'email.exists' => '该邮箱不存在',
        ]);

        $admin = Admin::where('email', $request->email)->first();


        if (sha1($request->password) != $admin->password) {
            return back()->withErrors('密码错误');
        }

        $session = session();
        $session->put('admin_id', $admin->id);
        $session->put('admin_name', $admin->name);
        $session->put('logind', true);


        return redirect(route('users.index'));


    }



    public function logout()
    {
        session()->flush();

        return redirect(route('loginView'));
    }


}
