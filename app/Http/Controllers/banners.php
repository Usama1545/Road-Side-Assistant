<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class banners extends Controller
{
    public function index()
    {
        //
        $banners = app('firebase.firestore')->database()->collection('homeBanner')->documents();
        return view('admin/banners',compact('banners'));
        // return dd($students);
      }
      public function destroy($id)
  {
    //
    app('firebase.firestore')->database()->collection('homeBanner')->document($id)->delete();
    return back();
  }
}
