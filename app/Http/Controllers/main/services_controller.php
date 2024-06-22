<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Auth;

class services_controller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = app('firebase.firestore')->database()->collection('categories')->documents();
        foreach ($categories as $data) {
            $category[] = $data->data();
        }
        return view('service')
        ->with('categories', $category);
    }
}
