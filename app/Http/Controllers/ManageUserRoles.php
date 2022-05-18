<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\UserRoles;
use Session;

class ManageUserRoles extends Controller
{
    public function add_form()
    {
        $data['page_name'] = 'Add New Role';
        $data['page_category'] = 'User Roles';
        return view('home/admin/dashboard/roles/add-form',$data);
    }

    public function insert(Request $request)
    {
        $data['page_name'] = 'Add New Role';
        $data['page_category'] = 'User Roles';

        # Collecting Data
        $user_role = new UserRoles;

        # Collecting Data
        $user_role->title = $request['title'];
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

        $success_msg = "Role ".$request['title']." Added!";

        return redirect()->back()->with('success',$success_msg);

        // return view('home/admin/dashboard/users/list',$data);
    }

    public function list()
    {
        $data['page_name'] = 'All Roless';
        $data['page_category'] = 'User Roles';
        $data['roles'] = UserRoles::all();
        return view('home/admin/dashboard/roles/list',$data);
    }

    public function delete($id)
    {
        $data['page_name'] = 'All Roless';
        $data['page_category'] = 'User Roles';
        $data['roles'] = UserRoles::find($id)->delete();
        $success_msg = "Role Deleted!";

        return redirect()->back()->with('success',$success_msg);
        // return view('home/admin/dashboard/roles/list',$data);
    }

    public function show_edit_form($id)
    {
        $data['page_name'] = 'Edit New Role';
        $data['page_category'] = 'User Roles';
        $data['role_data'] = DB::select("SELECT * FROM user_roles WHERE id = {$id}");
        return view('home/admin/dashboard/roles/edit-form',$data);
    }

    public function update($id,Request $request)
    {
        $user_role = UserRoles::find($id);
        $user_role->title = $request['title'];
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
        
        $success_msg = "Role Updated!";
        return redirect('dashboard/manage/roles')->with('success',$success_msg);
    }
}
