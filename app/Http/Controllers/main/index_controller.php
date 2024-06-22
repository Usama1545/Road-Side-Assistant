<?php

namespace App\Http\Controllers\main;
use Google\Cloud\Firestore\FirestoreClient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Session;

class index_controller extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $category = [];
        $banners = [];
        $pop_cat = [];
        $categories = app('firebase.firestore')->database()->collection('categories')->documents();
        $banner = app('firebase.firestore')->database()->collection('homeBanner')->documents();
        $pCategories = app('firebase.firestore')->database()->collection('pCategories')->documents();

        foreach ($categories as $data) {
            $category[] = $data->data();
        }
        foreach ($banner as $data) {
            $banners[] = $data->data();
        }
        foreach ($pCategories as $data) {
            $pop_cat[] = $data->data();
        }
// dd($banners);
        return view('index')
        ->with('categories', $category)
        ->with('banners', $banners)
        ->with('popular_cat', $pop_cat);
    }
}
