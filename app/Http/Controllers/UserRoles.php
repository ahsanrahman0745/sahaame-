<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\UserRoles;
use Session;

class UserRoles extends Controller
{
    public function add_form()
    {
        $data['page_name'] = 'Add New Role';
        $data['page_category'] = 'User Roles';
        return view('home/admin/dashboard/roles/add-form',$data);
    }

    public function insert(Request $request)
    {

        print_r($request->all());
        die;
        $user_role = new UserRoles;

        # Collecting Data
        $user_role->site_title = $request['title'];
        $user_role->slug = $request['slug'];
        $user_role->manage_role = $request['manage_role'];
        $user_role->manage_user = $request['manage_user'];
        $user_role->track_activity = $request['track_activity'];
        $user_role->manage_listing = $request['manage_listing'];
        $user_role->manage_ranking = $request['manage_ranking'];
        $user_role->manage_mini_site = $request['manage_mini_site'];
        $user_role->manage_email_templates = $request['manage_email_templates'];
        $user_role->manage_contact_details = $request['manage_contact_details'];
        $user_role->view_all_listings = $request['view_all_listings'];
        $user_role->add_listing = $request['add_listing'];
        $user_role->edit_listing = $request['edit_listing'];
        $user_role->delete_listing = $request['delete_listing'];
        $user_role->view_all_templates = $request['view_all_templates'];
        $user_role->add_templates = $request['add_templates'];
        $user_role->edit_templates = $request['edit_templates'];
        $user_role->delete_templates = $request['delete_templates'];
        $user_role->save();

        return view('home/admin/dashboard/users/list',$data);
    }
}
