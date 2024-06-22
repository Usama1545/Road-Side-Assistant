<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Session;

class service_provider_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $provider = app('firebase.firestore')->database()->collection('serviceProvider')->documents();
        return view('/service_providers')->with('provider',$provider);
    }
    public function get(Request $request,$category)
    {
        $dataArray = [];
        $provider = app('firebase.firestore')->database()->collection('serviceProvider')->documents();
        // $data=$provider->data();

        foreach($provider as $data)
        {
            $cat=$data->data()['categoryName'];
            if($cat === $category)
            {
                $dataArray[] = [
                'providerDes' =>$data->data()['providerDes'],
                'providerImage' =>$data->data()['providerImage'],
                'providerNumber' =>$data->data()['providerNumber'],
                'providerName' =>$data->data()['providerName'],
                'providerPrice' =>$data->data()['providerPrice'],
                'providerExperience' =>$data->data()['providerExperience'],
                'providerID' =>$data->data()['uid'],
                ];
            }
        }
        // dd($dataArray);
        return view('/service_providers', ['provider' => $dataArray]);
    }
}
