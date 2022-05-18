<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\UserRoles;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ManageUsers extends Controller
{
    public function add_form()
    {

        $data['page_name'] = 'Add New User';
        $data['page_category'] = 'All Users';
        $data['roles'] = UserRoles::all();
        return view('home/admin/dashboard/users/add-form',$data);
    }

    public function insert(Request $request)
    {
        print_r($request->all());
        // Validate Email
        $email = $request->email;
        $user = DB::select("SELECT * FROM users WHERE email = '{$email}'");
        $count = count($user);
        if ($count == 0) {
            $user = User::create([
                'first_name' =>$request->first_name,
                'last_name' =>$request->last_name,
                'email' =>$request->email,
                'password' => Hash::make($request->password),
                'role'=>$request->role,
                'remember_token' => Str::random(10),
            ]);
    
            $success_msg = "User `".$request->first_name." ".$request->last_name."` Added!";
    
            return redirect()->back()->with('success',$success_msg);
        } else {
            $error_msg = "User with `".$request->email."` already exist!";
    
            return redirect()->back()->with('error',$error_msg);
        }
        
        // return view('home/admin/dashboard/users/list',$data);
    }

    public function list()
    {
        $data['page_category'] = 'All Users';
        $data['page_name'] = 'Users List';
        $data['users'] = DB::select("SELECT * FROM users");
        return view('home/admin/dashboard/users/list',$data);
    }

    public function list_blocked()
    {
        $data['page_name'] = 'All Blocked Users';
        $data['users'] = DB::select("SELECT * FROM users");
        return view('home/admin/dashboard/users/list',$data);
    }

    public function delete($id)
    {
        $data['page_category'] = 'All Users';
        $data['page_name'] = 'Users List';
        User::find($id)->delete();
        $success_msg = "User Deleted!";

        return redirect()->back()->with('success',$success_msg);
        // return view('home/admin/dashboard/roles/list',$data);
    }

    public function edit_form($id)
    {
        $data['page_name'] = 'Edit User';
        $data['page_category'] = 'Manage Users';
        $data['user_data'] = DB::select("SELECT * FROM users WHERE id = {$id}");
        $data['roles'] = UserRoles::all();
        return view('home/admin/dashboard/users/edit',$data);
    }

    public function update_user($id,Request $request)
    {
        $data['page_category'] = 'All Users';
        $data['page_name'] = 'Users List';
        $user = user::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();
        $data['users'] = DB::select("SELECT * FROM users");
        $success_msg = "User Updated!";

        return redirect('dashboard/manage/users')->with('success',$success_msg);
    }

    public function password_form($id)
    {
        $data['page_name'] = 'Change Password';
        $data['page_category'] = 'Manage Users';
        $data['id'] = $id;
        return view('home/admin/dashboard/users/password',$data);
    }

    public function update_password($id,Request $request)
    {
        $data['page_name'] = 'Change Password';
        $data['page_category'] = 'Manage Users';

        $password = Hash::make($request->password);
        $user = User::find($id);
        $user->password = $password;
        $user->save();
        $success_msg = "Password Changed!";
        return redirect('dashboard/manage/users')->with('success',$success_msg);
    }

    public function login_form()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('home.login');
        }
    }

    public function login(Request $request)
    {
        Auth::logout();
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user_portal = Auth::user()->user_portal;
            if ($user_portal == "dashboard") {
                $role_id = Auth::user()->role;
                $role_data = DB::select("SELECT * FROM user_roles WHERE id = {$role_id}");
                Session::put('user_role', $role_data);
                Session::put('user_portal', $user_portal);
                return redirect('dashboard');
            } else {
                Auth::logout();
                Session::forget('user_role');
                Session::forget('user_portal');
                $error_msg = "Wrong details. Please enter correct login details!";
                return redirect('portal/login')->with('error',$error_msg);
            }
        } else {
            $error_msg = "Wrong details. Please enter correct login details!";
            return redirect('portal/login')->with('error',$error_msg);
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('user_role');
        Session::forget('user_portal');
        // session()->forget('user_role');
        return redirect('portal/login');
    }
}
