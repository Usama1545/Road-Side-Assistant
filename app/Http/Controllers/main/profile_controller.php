<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Auth;
use Session;

class profile_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $uid = Session::get('uid');
        $user = app('firebase.firestore')
        ->database()
        ->collection('users')
        ->where('uid', '=', $uid)
        ->documents();
        return view('profile')
            ->with('user', $user);
        }
        public function update(Request $request)
        {
            $id = $request->id;
            $student = app('firebase.firestore')->database()->collection('users')->document($id)
                ->update([
                ['path' => 'name', 'value' => $request->name],
                ['path' => 'email', 'value' => $request->email],
                ['path' => 'phoneNumber', 'value' => $request->phone],
                ['path' => 'password', 'value' => $request->password],
            ]);
            return back();
        }

}
