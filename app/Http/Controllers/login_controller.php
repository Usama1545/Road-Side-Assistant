<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    //
    public function index(Request $request)
    {
        $admin_email=$request->email;
        $admin_pass=$request->password;
        $email='admin@admin.com';
        $pass='Admin123';
        if($admin_email === $email && $admin_pass === $pass)
        {
            return redirect('admin/index');
        }
        else{
            return view('admin.login');
        }
    }
}
