<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class service_provider extends Controller
{
    //
    public function index()
    {
      //
      $service_provider = app('firebase.firestore')->database()->collection('serviceProvider')->documents();
      return view('admin/vendor',compact('service_provider'));
      // return dd($students);
    }

    public function destroy($id)
  {
    //
    app('firebase.firestore')->database()->collection('serviceProvider')->document($id)->delete();
    return back();
  }
}
