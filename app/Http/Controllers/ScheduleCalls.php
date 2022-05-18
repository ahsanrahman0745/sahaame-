<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\ScheduleCall;

class ScheduleCalls extends Controller
{
    public function insert(Request $request)
    {
        $calls = new ScheduleCall;

        # Collecting Data
        $calls->name = $request['name'];
        $calls->company_name = $request['company_name'];
        $calls->email = $request['email'];
        $calls->phone = $request['phone'];
        $calls->call_time = $request['call_time'];

        $calls->save();
        $data['page_name'] = 'Schedual a Consultation Call';
        $data['success'] = true;
        return view('home/schedual-call',$data);
    }

    function list()
    {
        $data['calls'] = DB::select("SELECT * FROM schedule_calls");
        return view('home/admin/dashboard/calls',$data);
    }
}
