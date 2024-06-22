<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index_controller extends Controller
{
    //
    public function index()
  {
    $user = 0;
    $service_providers = 0;
    $recent = app('firebase.firestore')
    ->database()
    ->collection('users')
    ->orderBy('CreatedAt', 'desc') 
    ->limit(10)
    ->documents();
    $users = app('firebase.firestore')->database()->collection('users')->documents();
    $service_provider = app('firebase.firestore')->database()->collection('serviceProvider')->documents();
foreach($users as $data)
{
    $user = $user + 1;

}
foreach($service_provider as $data)
{
    $service_providers = $service_providers + 1;

}
return view('admin/index')
        ->with('user_num', $user)
        ->with('service_providers', $service_providers)
        ->with('users', $recent);   
    // return dd($students);
  }
}
