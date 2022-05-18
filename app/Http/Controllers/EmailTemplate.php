<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailTemplates;
use App\Models\businesses;
use Illuminate\Support\Facades\Mail;
use Session;
use DB;

class EmailTemplate extends Controller
{
    public function list()
    {
        $data['page_category'] = 'Email Templates';
        $data['page_name'] = 'All Templates';

        // $user_id = Auth::user()->id;
        // $data['permissions'] = Session::get('user_role')[0];
        // if ($data['permissions']->view_all_templates != "") {
        //     $data['businesses'] = EmailTemplates::all();
        // } else {
        //     $data['businesses'] = DB::select("SELECT * FROM email_templates WHERE author = {$user_id}");
        // }
        $data['permissions'] = Session::get('user_role')[0];
        $data['templates'] = EmailTemplates::all();
        return view('home.admin.dashboard.email-template.list',$data);
    }

    public function view($id)
    {
        $data['permissions'] = Session::get('user_role')[0];
        $data['page_category'] = 'Email Templates';
        $data['page_name'] = 'Single Templates';
        return view('home.admin.dashboard.email-template.view',$data);
    }

    public function add_form()
    {
        $data['permissions'] = Session::get('user_role')[0];
        $data['page_category'] = 'Email Templates';
        $data['page_name'] = 'Add New Template';
        return view('home.admin.dashboard.email-template.add_form',$data);
    }

    public function edit_form($id)
    {
        $data['permissions'] = Session::get('user_role')[0];
        $data['page_category'] = 'Email Templates';
        $data['page_name'] = 'Edit Template';
        $data['template_detail'] = EmailTemplates::findOrFail($id);
        return view('home.admin.dashboard.email-template.edit_form',$data);
    }

    public function insert(Request $request)
    {
        $template = new  EmailTemplates;
        $template->subject = $request->subject;
        $template->body_json = $request->body_json;
        $template->body_html = $request->body_html;

        $template->save();
        return redirect()->back()->with('success', 'Template Added!');
    }

    public function update($id, Request $request)
    {
        $template = EmailTemplates::findOrFail($id);
        $template->subject = $request->subject;
        $template->body_json = $request->body_json;
        $template->body_html = $request->body_html;
        $template->update();

        return redirect()->back()->with('success', 'Template Updated!');
    }

    public function delete($id)
    {
        $template= EmailTemplates::findOrFail($id);
        $template->delete();
        return redirect()->back()->with('success', 'Template Deleted!');
    }

    public function list_template($id)
    {
        $business= DB::select("SELECT * FROM businesses WHERE id={$id}");
        $data['business'] = $business[0];
        return view('home.admin.dashboard.email-template.listing',$data);
    }

    // Email Text
    public function email_template_genrater($id)
    {
        $data['business']= DB::select("SELECT * FROM businesses WHERE id={$id}");
        $data['business'] = $data['business'][0];
        Mail::send('home.admin.dashboard.email-template.listing', ['business'=>$data['business']], function ($message) {
            $message->to('the.irf.1234@gmail.com')
                ->subject('Test');
        });
        // return view('home.admin.dashboard.email-template.listing',$data);
    }
}