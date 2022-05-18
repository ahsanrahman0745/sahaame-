<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Businesses;

class Admin extends Controller
{
    public function login()
    {
        echo 'Hello Admin';
    }

    public function add(Request $request)
    {
        $data['page'] = 'Add Business';
        $business = new Businesses;

        # Collecting Data
        $business->first_name = $request['first_name'];
        $business->last_name = $request['last_name'];
        $business->email = $request['email'];
        $business->phone = $request['phone'];
        $business->postcode = $request['postcode'];
        $business->whats_no = $request['whats_no'];
        $business->business_name = $request['business_name'];
        $business->business_type = $request['business_type'];
        $business->timings = $request['timings'];
        $business->business_country = $request['business_country'];
        $business->business_state = $request['business_state'];
        $business->business_city = $request['business_city'];
        $business->business_address = $request['business_address'];

        $business->save();
        $data['success'] = true;

        return view('home/admin/dashboard',$data);
    }

    public function add_form()
    {
        $data['page'] = 'Add Business';

        return view('home/admin/dashboard',$data);
    }

    public function list_business()
    {
        $data['page'] = 'All Business';
        $data['businesses'] = DB::select("SELECT * FROM businesses");
        return view('home/admin/dashboard/list/business',$data);
    }

    public function add_minisite_form()
    {
        $data['page'] = 'Add Mini Site';
        return view('home/admin/dashboard/add/mini-site',$data);
    }
}
