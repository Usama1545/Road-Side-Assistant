<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use Ipinfo\Ipinfo\IPinfo;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;

class bookings_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        $uid = Session::get('uid');
        $activeBooking = app('firebase.firestore')
        ->database()
        ->collection('activeBooking')
        ->where('userId', '=', $uid)
        ->documents();
        $lastBooking = app('firebase.firestore')->database()->collection('lastBooking')->where('userId', '=', $uid)->documents();

        return view('booking')
            ->with('active', $activeBooking)
            ->with('last', $lastBooking);
        }
    public function book(Request $request)
    {

//        $ipinfo = new IPinfo(env('IP_INFO_API_KEY'));
//        $ipDetails = $ipinfo->getDetails($request->ip());
//        $latitude = $ipDetails->latitude;
//        $longitude = $ipDetails->longitude;
        $uid = Session::get('uid');

        $currentDate = date("d-m-Y");
            $currentTime = date("h:m:s");
        $provider_id=$request->provider_id;
        $User_Info = app('firebase.firestore')->database()->collection('users')->where('uid', '=', $uid)->documents();
        $Provider_Info = app('firebase.firestore')->database()->collection('serviceProvider')->where('uid', '=', $provider_id)->documents();
      foreach ($User_Info as $user)
      {
          $user_name = $user['name'];
          $user_token = $user['userToken'];
      }
      foreach ($Provider_Info as $provider)
      {
        $provider_name = $provider['providerName'];
        $provider_image = $provider['providerImage'];
        $provider_des = $provider['providerDes'];
        $provider_phone = $provider['phoneNumber'];
        $provider_price = $provider['providerPrice'];
        $provider_token = $provider['deviceToken'];
        $provider_cat = $provider['categoryName'];
      }
        $long_alt="74.44254406875825";
        $lat_alt="31.464610089512952";
        $doc_id = Str::random(20);

        $stuRef = app('firebase.firestore')->database()->collection('activeBooking')->newDocument($doc_id);
        $stuRef->set([
            'bookingDate' => $currentDate,
            'bookingStatus'    => "Pending",
            'bookingId' => $doc_id,
            'bookingTime'    => $currentTime,
            'categoryName'    => $provider_cat,
            'latitude'    => $lat_alt,
            'longitude'    => $long_alt,
            'providerDes'    => $provider_des,
            'providerId'    => $provider_id,
            'providerPhone' => $provider_phone,
            'providerImage'    => $provider_image,
            'providerName'    => $provider_name,
            'providerPrice'    => $provider_price,
            'providerToken'    => $provider_token,
            'userName'    => $user_name,
            'userToken'    => $user_token,
            'userId'    => $uid,

        ]);
        Session::flash('message', 'Provider Booked Successfully');
        return redirect()->route('service.details', ['doc_id' => $doc_id]);
    }
    public function booking_details(Request $request,$doc_id)
    {
        $activeBooking = app('firebase.firestore')
            ->database()
            ->collection('activeBooking')
            ->where('bookingId', '=', $doc_id)
            ->documents();
        $lastBooking = app('firebase.firestore')
            ->database()
            ->collection('lastBooking')
            ->where('bookingId', '=', $doc_id)
            ->documents();
        if (!empty($activeBooking)) {
            $data = $activeBooking;
        }
        else{
            $data = $lastBooking;
        }
        return view('service-details')
            ->with('details', $data);

    }
    public function booking_cancel(Request $request,$doc_id)
    {
        $active = app('firebase.firestore')->database()->collection('activeBooking')->document($doc_id)
            ->update([
                ['path' => 'bookingStatus', 'value' => "Pending"],
            ]);
        $activeBooking = app('firebase.firestore')
            ->database()
            ->collection('activeBooking')
            ->where('bookingId', '=', $doc_id)
            ->documents();
        $lastBooking = app('firebase.firestore')
            ->database()
            ->collection('lastBooking')
            ->where('bookingId', '=', $doc_id)
            ->documents();
        if (!empty($activeBooking)) {
            $data = $activeBooking;
        }
        else{
            $data = $lastBooking;
        }
        return view('service-details')
            ->with('details', $data);

    }
}
