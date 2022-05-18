<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuestUsers;
use DB;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\ListingReviews;
use Illuminate\Support\Facades\Auth;

class GuestUser extends Controller
{
    public function login_form()
    {
        $data['page_title'] = "Guest Login | Sahaa.me";
        return view('home/guest/login',$data);
    }

    public function login(Request $request)
    {
        Auth::logout();
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            Session::put('user_role', 'guest');
            Session::put('user_portal', 'profile');
            $user_portal = Auth::user()->user_portal;
            if ($user_portal == "profile") {
                return redirect('guest/profile');
            } else {
                Auth::logout();
                Session::forget('user_portal');
                $error_msg = "Wrong details. Please enter correct login details!";
                return redirect('guest/login')->with('error',$error_msg);
            }
        } else {
            $error_msg = "Wrong details. Please enter correct login details!";
            return redirect('guest/login')->with('error',$error_msg);
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('user_portal');
        return redirect('guest/login');
    }

    public function signup_form()
    {
        $data['page_title'] = "Guest Signup | Sahaa.me";
        return view('home/guest/signup',$data);
    }

    public function signup(Request $request)
    {
        $email = $request->email;
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $guest_data = DB::select("SELECT id FROM users WHERE email='{$email}'");
        $error = 0;
        if(count($guest_data) > 0) {
            $error = 1;
            $data['email_error'] = "Email already exist.";
        }

        if($request->password != $request->confirm_password) {
            $error = 1;
            $data['password_error'] = "Enter same password.";
        }

        if ($error != 0) {
            $data['page_title'] = "Guest Signup | Sahaa.me";
            return view('home/guest/signup',$data);
        } else {
            $guest_user = new User();
            $guest_user->first_name = $request->first_name;
            $guest_user->last_name = $request->last_name;
            $guest_user->phone = $request->phone;
            $guest_user->email = $request->email;
            $guest_user->password = Hash::make($request->password);
            $guest_user->ip_address = $request->ip_address;
            $guest_user->city = $request->city;
            $guest_user->region = $request->region;
            $guest_user->country = $request->country;
            $guest_user->login_signup_source = "form";
            $guest_user->user_portal = 'profile';
            $guest_user->actiation_status = 0;
            $guest_user->actiation_hash = md5(time());
            $guest_user->save();
            return redirect("guest/login")->with('success',"Please login to continue.");
        }

    }

    public function show_profile()
    {
        $data['page_title'] = "Profile | Sahaa.me";
        $data['guest_data'] = Auth::user();
        return view('home/guest/profile',$data);
    }

    public function list_reviews()
    {
        $guest_id = Auth::user()->id;
        $data['page_title'] = "Reviews | Sahaa.me";
        $data['guest_data'] = Auth::user();
        $data['reviews'] = DB::select("SELECT * FROM listing_reviews WHERE user_id={$guest_id}");
        return view('home/guest/reviews',$data);
    }

    public function edit_review_form($review_id)
    {
        $data['page_title'] = "Edit Reviews | Sahaa.me";
        $data['guest_data'] = Auth::user();
        $data['review_data'] = DB::select("SELECT id,title,review FROM listing_reviews WHERE id={$review_id}");
        $data['review_data'] = $data['review_data'][0];
        return view('home/guest/edit-review',$data);
    }

    public function update_review($review_id,Request $request)
    {
        $review = ListingReviews::find($review_id);
        $review->title = $request->title;
        $review->review = $request->review;
        $review->save();
        return redirect("guest/profile/reviews");
    }

    public function delete_review($review_id)
    {
        $review = ListingReviews::find($review_id)->delete();
        return redirect("guest/profile/reviews");
    }

    public function update_banner(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        if ($request->file('banner')){
            $banner = md5(time()).'.'.$request->banner->extension();
            $request->file('banner')->move(public_path('business/user-profile/banner/'), $banner);
            $user->banner_image = $banner;
            $user->save();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
        
    }

    public function update_profile_image(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        if ($request->file('profile_image')){
            $profile_image = md5(time()).'.'.$request->profile_image->extension();
            $request->file('profile_image')->move(public_path('business/user-profile/profile/'), $profile_image);
            $user->profile_image = $profile_image;
            $user->save();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
        
    }

    public function update_profile(Request $request)
    {
        $haser = app('hash');
        $guest_id = Auth::user()->id;
        if(isset($request->update_info)) {
            $user = User::find($guest_id);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->save();
        }

        $guest_password = Auth::user()->password;
        
        if(isset($request->update_login)) {
            $guest_data = DB::select("SELECT password FROM users WHERE id = {$guest_id}");
            $guest_data = $guest_data[0];
            if(Auth::user()->email == $request->email && Hash::check($request->old_password,$guest_data->password)) {
                if ($request->password == $request->confirm_password) {
                    $user = User::find($guest_id);
                    $user->password = Hash::make($request->password);
                    $user->save();
                    Auth::logout();
                    Session::forget('user_portal');
                    return redirect('guest/login')->with('success','Please login with new password');
                } else {
                    return redirect('guest/profile#login-setting')->with('password_error','Please Enter same password.');
                }
            } else {
                return redirect('guest/profile#login-setting')->with('password_error','Please Enter same password.');
            }
        }
        return redirect()->back();
    }

}
