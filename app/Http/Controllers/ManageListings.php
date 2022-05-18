<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\businesses;
use App\Models\locations;
use App\Models\cities;
use App\Models\keywords;
use App\Models\rankbykeywords;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Auth;
use DB;
use App\Models\EmailTemplates;
use Illuminate\Support\Facades\Mail;
use Session;

class ManageListings extends Controller
{
    public function show_data($id)
    {
        $user_id = Auth::user()->id;
        $data['permissions'] = Session::get('user_role')[0];
        $data['business_detail'] = businesses::findOrFail($id);
        return view('home.admin.dashboard.listing.view',$data);
    }

    public function show_form()
    {
        $user_id = Auth::user()->id;
        $data['permissions'] = Session::get('user_role')[0];
        return view('home.admin.dashboard.listing.form',$data);
    }

    public function insert_data(Request $request)
    {
        $kyids = [];
        $validator = Validator::make($request->all() , ['name' => 'required', 'snipshot' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048', 'logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048']);
        if ($validator->fails()) {
            return $validator->errors();
        }

        // Collecting Data
        $businesses = new businesses();
        // Spleting KeyWords
        if (is_array($request->input('keywords'))) {
            foreach ($request->input('keywords') as $add) {
                if ((int)$add > 0) {
                    $kyids[] = $add;
                } else {
                    $kyids[] = $this->addkeyword($add);
                }
            }
            $businesses->keywords = implode(",", $kyids);
        }
        $businesses->name = $this->clean_string($request->name);
        // Uploading Files
        if ($request->file('snipshot')) {
            $snipshot = "true";
            $snipshotpath = md5(time()).'.'.$request->snipshot->extension();
            $request->file('snipshot')->move(public_path('business/listings/promotion/'), $snipshotpath);
            $businesses->snipshot = $snipshotpath;
        }
        $request->validate([
            'logo' => 'dimensions:max_width=250,max_height=250',
        ]);
        if ($request->file('logo')){
            $logo = "true";
            $logo = time().'.'.$request->logo->extension();
            $request->file('logo')->move(public_path('business/listings/logo/'), $logo);
//            $logo = md5(time()).'.'.$request->logo->extension();
//            $request->file('logo')->move(public_path('business/listings/logo/'), $logo);
            $businesses->logo = $logo;
        }
        // Collecting Business Detail
        $businesses->slug = $this->clean_string(Str::slug($request->input('name')));
        $businesses->short_desc = $this->clean_string($request->input('short_desc'));
        $businesses->author = Auth::user()->id;
        $businesses->pcategories = $this->clean_string($request->input('pcategories'));
        $businesses->parent_category_text = $this->clean_string($request->input('parent_category_text'));
        $businesses->categories = $this->clean_string($request->input('categories'));
        $businesses->sub_category_text = $this->clean_string($request->input('sub_category_text'));
        // Collecting Business Contact Detail
        $businesses->phone = $this->clean_string($request->input('phone'));
        $businesses->phone_text = $this->clean_string($request->input('phone_text'));
        $businesses->whatsapp = $this->clean_string($request->input('whatsapp'));
        $businesses->website = $this->clean_string($request->input('website'));
        $businesses->email = $this->clean_string($request->input('email'));
        // Collecting Business Address
        $businesses->office = $this->clean_string($request->input('office'));
        $businesses->floor = $this->clean_string($request->input('floor'));
        $businesses->buildingname = $this->clean_string($request->input('buildingname'));
        $businesses->streetname = $this->clean_string($request->input('streetname'));
        $businesses->area = $this->clean_string($request->input('area'));
        $businesses->country = $this->clean_string($request->input('country'));
        $businesses->city = $this->clean_string($request->input('city'));
        $businesses->state = $this->clean_string($request->input('state'));
        $businesses->state_text = $this->clean_string($request->input('state_text'));
        $businesses->city_text = $this->clean_string($request->input('city_text'));
        // Collecting Business Timings
        #   Opening
        $businesses->mon_open_time = $this->clean_string($request->input('mon_open_time'));
        $businesses->tue_open_time = $this->clean_string($request->input('tue_open_time'));
        $businesses->wed_open_time = $this->clean_string($request->input('wed_open_time'));
        $businesses->thu_open_time = $this->clean_string($request->input('thu_open_time'));
        $businesses->fri_open_time = $this->clean_string($request->input('fri_open_time'));
        $businesses->sat_open_time = $this->clean_string($request->input('sat_open_time'));
        $businesses->sun_open_time = $this->clean_string($request->input('sun_open_time'));
        #   Closing
        $businesses->mon_close_time = $this->clean_string($request->input('mon_close_time'));
        $businesses->tue_close_time = $this->clean_string($request->input('tue_close_time'));
        $businesses->wed_close_time = $this->clean_string($request->input('wed_close_time'));
        $businesses->thu_close_time = $this->clean_string($request->input('thu_close_time'));
        $businesses->fri_close_time = $this->clean_string($request->input('fri_close_time'));
        $businesses->sat_close_time = $this->clean_string($request->input('sat_close_time'));
        $businesses->sun_close_time = $this->clean_string($request->input('sun_close_time'));
        // Collecting Services
        $businesses->stitle_1 = $this->clean_string($request->input('stitle_1'));
        $businesses->stitle_2 = $this->clean_string($request->input('stitle_2'));
        $businesses->stitle_3 = $this->clean_string($request->input('stitle_3'));
        $businesses->stitle_4 = $this->clean_string($request->input('stitle_4'));
        $businesses->stitle_5 = $this->clean_string($request->input('stitle_5'));
        $businesses->stitle_6 = $this->clean_string($request->input('stitle_6'));
        // Collecting SEO
        $businesses->meta_desc = $this->clean_string($request->input('meta_desc'));
        $businesses->meta_keywords = $request->input('meta_keywords');
        $businesses->meta_title_slug = $this->clean_string($request->input('meta_title_slug'));
        $businesses->seo_link = $request->input('seo_link');
        $businesses->mtitle = $this->clean_string($request->input('mtitle'));
        $businesses->seo_item_meta_title_format = json_encode($request->input('seo_item_meta_title_format'));
        // Collecting Owner Detail
        $businesses->owner_name = $this->clean_string($request->input('owner_name'));
        $businesses->owner_phone = $this->clean_string($request->input('owner_phone'));
        $businesses->owner_email = $this->clean_string($request->input('owner_email'));
        $businesses->owner_dob = $this->clean_string($request->input('owner_dob'));
        $businesses->owner_type = $this->clean_string($request->input('owner_type'));
        $businesses->security_question_slug = $this->clean_string($request->input('security_question_slug'));
        $businesses->security_question_text = $this->clean_string($request->input('security_question_text'));
        $businesses->security_answer = $this->clean_string($request->input('security_answer'));

        $email = $this->clean_string($request->email);
        $name = $this->clean_string($request->name);
        $pcategories = $this->clean_string($request->pcategories);
        $categories = $this->clean_string($request->categories);
        $spam_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM businesses WHERE (email='{$email}' OR name='{$name}') AND (pcategories={$pcategories} AND categories={$categories} ) ");
        // print_r($spam_validation);
        if ($spam_validation[0]->TOTAL == 0) {
            $businesses->spam = 0;
        } else {
            $businesses->spam = 1;
        }

        if (!isset($logo) || $request->email == '' || !filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $businesses->recheck = 1;
        } else {
            $businesses->recheck = 0;
        }

        if ($request->input('stitle_1') != '') {
            $service_title = $this->clean_string($request->input('stitle_1'));
            $service_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM user_services_list WHERE title='{$service_title}' AND (parent_category={$pcategories} AND sub_category={$categories} ) ");
            if($service_validation[0]->TOTAL == 0) {
                DB::table('user_services_list')->insert([
                    'parent_category' => $this->clean_string($request->pcategories),
                    'parent_category_text' => $this->clean_string($request->parent_category_text),
                    'sub_category' => $this->clean_string($request->categories),
                    'sub_category_text' => $this->clean_string($request->sub_category_text),
                    'title' => $service_title
                ]);
            }
        }

        if ($request->input('stitle_2') != '') {
            $service_title = $this->clean_string($request->input('stitle_2'));
            $service_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM user_services_list WHERE title='{$service_title}' AND (parent_category={$pcategories} AND sub_category={$categories} ) ");
            if($service_validation[0]->TOTAL == 0) {
                DB::table('user_services_list')->insert([
                    'parent_category' => $this->clean_string($request->pcategories),
                    'parent_category_text' => $this->clean_string($request->parent_category_text),
                    'sub_category' => $this->clean_string($request->categories),
                    'sub_category_text' => $this->clean_string($request->sub_category_text),
                    'title' => $service_title
                ]);
            }
        }

        if ($request->input('stitle_3') != '') {
            $service_title = $this->clean_string($request->input('stitle_3'));
            $service_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM user_services_list WHERE title='{$service_title}' AND (parent_category={$pcategories} AND sub_category={$categories} ) ");
            if($service_validation[0]->TOTAL == 0) {
                DB::table('user_services_list')->insert([
                    'parent_category' => $this->clean_string($request->pcategories),
                    'parent_category_text' => $this->clean_string($request->parent_category_text),
                    'sub_category' => $this->clean_string($request->categories),
                    'sub_category_text' => $this->clean_string($request->sub_category_text),
                    'title' => $service_title
                ]);
            }
        }

        if ($request->input('stitle_4') != '') {
            $service_title = $this->clean_string($request->input('stitle_4'));
            $service_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM user_services_list WHERE title='{$service_title}' AND (parent_category={$pcategories} AND sub_category={$categories} ) ");
            if($service_validation[0]->TOTAL == 0) {
                DB::table('user_services_list')->insert([
                    'parent_category' => $this->clean_string($request->pcategories),
                    'parent_category_text' => $this->clean_string($request->parent_category_text),
                    'sub_category' => $this->clean_string($request->categories),
                    'sub_category_text' => $this->clean_string($request->sub_category_text),
                    'title' => $service_title
                ]);
            }
        }

        if ($request->input('stitle_5') != '') {
            $service_title = $this->clean_string($request->input('stitle_5'));
            $service_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM user_services_list WHERE title='{$service_title}' AND (parent_category={$pcategories} AND sub_category={$categories} ) ");
            if($service_validation[0]->TOTAL == 0) {
                DB::table('user_services_list')->insert([
                    'parent_category' => $this->clean_string($request->pcategories),
                    'parent_category_text' => $this->clean_string($request->parent_category_text),
                    'sub_category' => $this->clean_string($request->categories),
                    'sub_category_text' => $this->clean_string($request->sub_category_text),
                    'title' => $service_title
                ]);
            }
        }

        if ($request->input('stitle_6') != '') {
            $service_title = $this->clean_string($request->input('stitle_6'));
            $service_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM user_services_list WHERE title='{$service_title}' AND (parent_category={$pcategories} AND sub_category={$categories} ) ");
            if($service_validation[0]->TOTAL == 0) {
                DB::table('user_services_list')->insert([
                    'parent_category' => $this->clean_string($request->pcategories),
                    'parent_category_text' => $this->clean_string($request->parent_category_text),
                    'sub_category' => $this->clean_string($request->categories),
                    'sub_category_text' => $this->clean_string($request->sub_category_text),
                    'title' => $service_title
                ]);
            }
        }

        if ($businesses->save())
        {
            if (is_array($kyids))
            {
                foreach ($kyids as $kyid)
                {
                    $this->linkkeyword($kyid, $businesses->id);
                }
            }
            return redirect()->back()->with('success','Listing Added Successfuly!');
        }
    }

    public function update($id, Request $request)
    {
        $kyids = [];
        // Collecting Data
        $businesses = businesses::find($id);
        // Spleting KeyWords
        if (is_array($request->input('keywords'))) {
            foreach ($request->input('keywords') as $add) {
                if ((int)$add > 0) {
                    $kyids[] = $add;
                } else {
                    $kyids[] = $this->addkeyword($add);
                }
            }
            $businesses->keywords = implode(",", $kyids);
        }

        $businesses->name = $this->clean_string($request->input('name'));
        // Uploading Files

        if ($request->file('snipshot')) {
            $snipshotpath = md5(time()).'.'.$request->snipshot->extension();
            $request->file('snipshot')->move(public_path('business/listings/promotion/'), $snipshotpath);
            $businesses->snipshot = $snipshotpath;
        }
        if ($request->file('logo')){
            $logo = md5(time()).'.'.$request->logo->extension();
            $request->file('logo')->move(public_path('business/listings/logo/'), $logo);
            $businesses->logo = $logo;
        }

        // Collecting Business Detail
        $businesses->slug = $this->clean_string(Str::slug($request->input('name')));
        $businesses->short_desc = $this->clean_string($request->input('short_desc'));
        $businesses->author = $this->clean_string(Auth::user()->id);
        $businesses->pcategories = $this->clean_string($request->input('pcategories'));
        $businesses->parent_category_text = $this->clean_string($request->input('parent_category_text'));
        $businesses->categories = $this->clean_string($request->input('categories'));
        $businesses->sub_category_text = $this->clean_string($request->input('sub_category_text'));
        // Collecting Business Contact Detail
        $businesses->phone = $this->clean_string($request->input('phone'));
        $businesses->phone_text = $this->clean_string($request->input('phone_text'));
        $businesses->whatsapp = $this->clean_string($request->input('whatsapp'));
        $businesses->website = $this->clean_string($request->input('website'));
        $businesses->email = $this->clean_string($request->input('email'));
        // Collecting Business Address
        $businesses->office = $this->clean_string($request->input('office'));
        $businesses->floor = $this->clean_string($request->input('floor'));
        $businesses->buildingname = $this->clean_string($request->input('buildingname'));
        $businesses->streetname = $this->clean_string($request->input('streetname'));
        $businesses->area = $this->clean_string($request->input('area'));
        $businesses->country = $this->clean_string($request->input('country'));
        $businesses->city = $this->clean_string($request->input('city'));
        $businesses->state = $this->clean_string($request->input('state'));
        $businesses->state_text = $this->clean_string($request->input('state_text'));
        $businesses->city_text = $this->clean_string($request->input('city_text'));
        // Collecting Business Timings
        #   Opening
        $businesses->mon_open_time = $this->clean_string($request->input('mon_open_time'));
        $businesses->tue_open_time = $this->clean_string($request->input('tue_open_time'));
        $businesses->wed_open_time = $this->clean_string($request->input('wed_open_time'));
        $businesses->thu_open_time = $this->clean_string($request->input('thu_open_time'));
        $businesses->fri_open_time = $this->clean_string($request->input('fri_open_time'));
        $businesses->sat_open_time = $this->clean_string($request->input('sat_open_time'));
        $businesses->sun_open_time = $this->clean_string($request->input('sun_open_time'));
        #   Closing
        $businesses->mon_close_time = $this->clean_string($request->input('mon_close_time'));
        $businesses->tue_close_time = $this->clean_string($request->input('tue_close_time'));
        $businesses->wed_close_time = $this->clean_string($request->input('wed_close_time'));
        $businesses->thu_close_time = $this->clean_string($request->input('thu_close_time'));
        $businesses->fri_close_time = $this->clean_string($request->input('fri_close_time'));
        $businesses->sat_close_time = $this->clean_string($request->input('sat_close_time'));
        $businesses->sun_close_time = $this->clean_string($request->input('sun_close_time'));
        // Collecting Services
        $businesses->stitle_1 = $this->clean_string($request->input('stitle_1'));
        $businesses->stitle_2 = $this->clean_string($request->input('stitle_2'));
        $businesses->stitle_3 = $this->clean_string($request->input('stitle_3'));
        $businesses->stitle_4 = $this->clean_string($request->input('stitle_4'));
        $businesses->stitle_5 = $this->clean_string($request->input('stitle_5'));
        $businesses->stitle_6 = $this->clean_string($request->input('stitle_6'));
        // Collecting SEO
        $businesses->meta_desc = $this->clean_string($request->input('meta_desc'));
        $businesses->meta_keywords = $request->input('meta_keywords');
        $businesses->meta_title_slug = $this->clean_string($request->input('meta_title_slug'));
        $businesses->seo_link = $request->input('seo_link');
        $businesses->mtitle = $this->clean_string($request->input('mtitle'));
        $businesses->seo_item_meta_title_format = json_encode($request->input('seo_item_meta_title_format'));
        // Collecting Owner Detail
        $businesses->owner_name = $this->clean_string($request->input('owner_name'));
        $businesses->owner_phone = $this->clean_string($request->input('owner_phone'));
        $businesses->owner_email = $this->clean_string($request->input('owner_email'));
        $businesses->owner_dob = $this->clean_string($request->input('owner_dob'));
        $businesses->owner_type = $this->clean_string($request->input('owner_type'));
        $businesses->security_question_slug = $this->clean_string($request->input('security_question_slug'));
        $businesses->security_question_text = $this->clean_string($request->input('security_question_text'));
        $businesses->security_answer = $this->clean_string($request->input('security_answer'));

        $email = $this->clean_string($request->email);
        $name = $this->clean_string($request->name);
        $pcategories = $this->clean_string($request->pcategories);
        $categories = $this->clean_string($request->categories);
        $spam_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM businesses WHERE (email='{$email}' OR name='{$name}') AND (pcategories={$pcategories} AND categories={$categories} ) AND id != {$id}");
        print_r($spam_validation);
        if ($spam_validation[0]->TOTAL == 0) {
            $businesses->spam = 0;
        } else {
            $businesses->spam = 1;
        }

        if (!isset($logo) || $request->email == '' || !filter_var($request->email, FILTER_VALIDATE_EMAIL) || $request->logo_default != '') {
            $businesses->recheck = 1;
            $recheck = 1;
        } else {
            $businesses->recheck = 0;
            $recheck = 0;
        }

        if ($request->input('stitle_1') != '') {
            $service_title = $this->clean_string($request->input('stitle_1'));
            $service_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM user_services_list WHERE title='{$service_title}' AND (parent_category={$pcategories} AND sub_category={$categories} ) ");
            if($service_validation[0]->TOTAL == 0) {
                DB::table('user_services_list')->insert([
                    'parent_category' => $this->clean_string($request->pcategories),
                    'parent_category_text' => $this->clean_string($request->parent_category_text),
                    'sub_category' => $this->clean_string($request->categories),
                    'sub_category_text' => $this->clean_string($request->sub_category_text),
                    'title' => $service_title
                ]);
            }
        }

        if ($request->input('stitle_2') != '') {
            $service_title = $this->clean_string($request->input('stitle_2'));
            $service_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM user_services_list WHERE title='{$service_title}' AND (parent_category={$pcategories} AND sub_category={$categories} ) ");
            if($service_validation[0]->TOTAL == 0) {
                DB::table('user_services_list')->insert([
                    'parent_category' => $this->clean_string($request->pcategories),
                    'parent_category_text' => $this->clean_string($request->parent_category_text),
                    'sub_category' => $this->clean_string($request->categories),
                    'sub_category_text' => $this->clean_string($request->sub_category_text),
                    'title' => $service_title
                ]);
            }
        }

        if ($request->input('stitle_3') != '') {
            $service_title = $this->clean_string($request->input('stitle_3'));
            $service_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM user_services_list WHERE title='{$service_title}' AND (parent_category={$pcategories} AND sub_category={$categories} ) ");
            if($service_validation[0]->TOTAL == 0) {
                DB::table('user_services_list')->insert([
                    'parent_category' => $this->clean_string($request->pcategories),
                    'parent_category_text' => $this->clean_string($request->parent_category_text),
                    'sub_category' => $this->clean_string($request->categories),
                    'sub_category_text' => $this->clean_string($request->sub_category_text),
                    'title' => $service_title
                ]);
            }
        }

        if ($request->input('stitle_4') != '') {
            $service_title = $this->clean_string($request->input('stitle_4'));
            $service_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM user_services_list WHERE title='{$service_title}' AND (parent_category={$pcategories} AND sub_category={$categories} ) ");
            if($service_validation[0]->TOTAL == 0) {
                DB::table('user_services_list')->insert([
                    'parent_category' => $this->clean_string($request->pcategories),
                    'parent_category_text' => $this->clean_string($request->parent_category_text),
                    'sub_category' => $this->clean_string($request->categories),
                    'sub_category_text' => $this->clean_string($request->sub_category_text),
                    'title' => $service_title
                ]);
            }
        }

        if ($request->input('stitle_5') != '') {
            $service_title = $this->clean_string($request->input('stitle_5'));
            $service_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM user_services_list WHERE title='{$service_title}' AND (parent_category={$pcategories} AND sub_category={$categories} ) ");
            if($service_validation[0]->TOTAL == 0) {
                DB::table('user_services_list')->insert([
                    'parent_category' => $this->clean_string($request->pcategories),
                    'parent_category_text' => $this->clean_string($request->parent_category_text),
                    'sub_category' => $this->clean_string($request->categories),
                    'sub_category_text' => $this->clean_string($request->sub_category_text),
                    'title' => $service_title
                ]);
            }
        }

        if ($request->input('stitle_6') != '') {
            $service_title = $this->clean_string($request->input('stitle_6'));
            $service_validation = DB::select("SELECT COUNT(*) AS TOTAL FROM user_services_list WHERE title='{$service_title}' AND (parent_category={$pcategories} AND sub_category={$categories} ) ");
            if($service_validation[0]->TOTAL == 0) {
                DB::table('user_services_list')->insert([
                    'parent_category' => $this->clean_string($request->pcategories),
                    'parent_category_text' => $this->clean_string($request->parent_category_text),
                    'sub_category' => $this->clean_string($request->categories),
                    'sub_category_text' => $this->clean_string($request->sub_category_text),
                    'title' => $service_title
                ]);
            }
        }

        if ($businesses->save())
        {
            if (is_array($kyids))
            {
                foreach ($kyids as $kyid)
                {
                    $this->linkkeyword($kyid, $businesses->id);
                }
            }

            $success_msg = "Listing Updated!";
            return redirect('manage/listing/list')->with('success',$success_msg);
            // return redirect()->back()->with('success','Listing Added Successfuly!');
        }
    }

    public function list()
    {
        $user_id = Auth::user()->id;
        $data['permissions'] = Session::get('user_role')[0];
        if ($data['permissions']->view_all_listings != "") {
            $data['businesses'] = DB::select("SELECT * FROM businesses WHERE email != '' AND recheck = 0");
        } else {
            $data['businesses'] = DB::select("SELECT * FROM businesses WHERE author = {$user_id} AND email != ''  AND recheck = 0");
        }

        $data['email_templates'] = EmailTemplates::all();

        return view('home.admin.dashboard.listing.list',$data);
    }

    public function recheck()
    {
        $user_id = Auth::user()->id;

        $data['permissions'] = Session::get('user_role')[0];
        if ($data['permissions']->view_all_listings != "") {
            $sql = "SELECT id,name,email,pcategories,categories,created_at FROM businesses WHERE recheck = 1";
            $data['businesses'] = DB::select("SELECT id,name,logo,email,pcategories,categories,created_at FROM businesses WHERE recheck = 1");
        } else {
            $sql = "SELECT * FROM businesses WHERE author = {$user_id} AND recheck = 1";
            $data['businesses'] = DB::select("SELECT id,name,logo,email,pcategories,categories,created_at FROM businesses WHERE author = {$user_id} AND recheck = 1");
        }
        return view('home.admin.dashboard.listing.recheck',$data);
    }

    public function filtered_list(Request $request)
    {
        $user_id = Auth::user()->id;
        $data['permissions'] = Session::get('user_role')[0];
        $sql = "SELECT * FROM businesses";
        $sql_counter = 0;
        foreach($_POST AS $index=>$value){
            $data[$index] = $value;
            if ($index != '_token' && $value !='' && $index != 'role' && $index != 'date_from' && $index != 'date_to') {
                if($sql_counter==0){$sql .= " WHERE "; $sql_counter=1;}
                if($index == "email" || $index == "country") {
                    $sql .= " (" . $index . "= '" . $value . "') AND ";
                } else {
                    $sql .= " (" . $index . "= " . $value . ") AND ";
                }
            }
        }

        if ($request->date_from != "" && $request->date_to != "") {
            $data['date_from'] = $request->date_from;
            $data['date_to'] = $request->date_to;
            $sql .= " ( created_at BETWEEN '".$request->date_from."' AND '".$request->date_to."') AND ";
        }

        $sql = substr($sql, 0, -4);

        $data['businesses'] = DB::select($sql);
        $data['email_templates'] = EmailTemplates::all();

        return view('home.admin.dashboard.listing.list',$data);
    }

    public function action_filtered_list(Request $request)
    {
        if (isset($request->bulk_action)) {
            $action = $request->action;
            $bulk_ids = $request->selected_ids;
            $bulk_ids = explode(',',$bulk_ids);
            $count_ids = count($bulk_ids);
            $success_msg = '';
            $emails = [];
            $email_body = '';
            $email_subject = '';
            for ($i=0; $i<$count_ids; $i++) {

                if ($action == 'send_mail') {

                    if (isset($request->send_listing)) {

                        if ($request->send_listing != "") {

                            $listing_id = $bulk_ids[$i];
                            $this->email_template_genrater($listing_id);
                            sleep(1);
                            $success_msg = 'Mail Sent!';

                        }

                    } else {

                        $template_id = $request->template_id;
                        $email_template = EmailTemplates::where('id',$template_id)->first();
                        $business = businesses::where('id',$bulk_ids[$i])->first();
                        $email_body = $email_template->body_html;
                        $email_subject = $email_template->subject;
                        $receiver_email = $business->email;
                        Mail::send([], [], function ($message) use ($receiver_email,$email_subject,$email_body) {
                            $message->to($receiver_email)
                                ->subject($email_subject)
                                ->setBody($email_body, 'text/html'); // for HTML rich messages
                        });
                        $success_msg = 'Mail Sent!';

                    }

                } else {

                    if ($action == 'verified') {

                        $businesses= businesses::where('id', $bulk_ids[$i])->update(array('verified' =>1));
                        $success_msg = 'Marked as Verified!';

                    } elseif ($action == 'unverified') {

                        $success_msg = 'Marked as Un-Verified!';
                        $businesses= businesses::where('id', $bulk_ids[$i])->update(array('verified' =>0));

                    } elseif ($action == 'active') {

                        $success_msg = 'Marked as Active!';
                        $businesses= businesses::where('id', $bulk_ids[$i])->update(array('active' =>1,'spam'=>0));

                    } elseif ($action == 'deactive') {

                        $success_msg = 'Marked as De-Active!';
                        $businesses= businesses::where('id', $bulk_ids[$i])->update(array('active' =>0));

                    } elseif ($action == 'start_0') {

                        $success_msg = 'Ranked to 0!';
                        $businesses= businesses::where('id', $bulk_ids[$i])->update(array('ranking_stars' =>0));

                    } elseif ($action == 'start_1') {

                        $success_msg = 'Ranked to 01!';
                        $businesses= businesses::where('id', $bulk_ids[$i])->update(array('ranking_stars' =>1));

                    } elseif ($action == 'start_2') {

                        $success_msg = 'Ranked to 02!';
                        $businesses= businesses::where('id', $bulk_ids[$i])->update(array('ranking_stars' =>2));

                    } elseif ($action == 'start_3') {

                        $success_msg = 'Ranked to 03!';
                        $businesses= businesses::where('id', $bulk_ids[$i])->update(array('ranking_stars' =>3));

                    } elseif ($action == 'spam') {

                        $success_msg = 'Marked as Spam!';
                        $businesses= businesses::where('id', $bulk_ids[$i])->update(array('spam' =>1));
                    }
                }
            }
        }
        return redirect()->back()->with('success', $success_msg);
        // return view('home.admin.dashboard.listing.list',$data);
    }

    public function delete($id)
    {
        $businesses= businesses::findOrFail($id);
        $businesses->delete();
        return redirect()->back()->with('success', 'Record Deleted!');
    }

    public function edit_form($id)
    {
        $user_id = Auth::user()->id;
        $data['permissions'] = Session::get('user_role')[0];
        $business = DB::select("SELECT * FROM businesses WHERE id = {$id}");
        $data['business'] = $business[0];
        return view('home.admin.dashboard.listing.edit-form',$data);
    }

    public function clean_string($string)
    {
        $string = str_replace("'","",$string);
        $string = str_replace('"','',$string);
        $string = str_replace('/','',$string);
        $string = htmlspecialchars($string, ENT_QUOTES);
        return $string;
    }

    public function email_template_genrater($id)
    {
        $data['business']= DB::select("SELECT * FROM businesses WHERE id={$id}");
        $data['business'] = $data['business'][0];
        $email = $data['business']->email;
        Mail::send('home.admin.dashboard.email-template.listing', ['business'=>$data['business']], function ($message) use ($email) {
            $message->to($email)
                ->subject('Verify Your Business with Sahaa.me');
        });
        // return view('home.admin.dashboard.email-template.listing',$data);
    }

    public function listimage()
    {
        $user_id = Auth::user()->id;
        $data['permissions'] = Session::get('user_role')[0];
        if ($data['permissions']->view_all_listings != "") {
            $data['businesses'] = DB::select("SELECT * FROM businesses WHERE email != '' AND recheck = 0");
        } else {
            $data['businesses'] = DB::select("SELECT * FROM businesses WHERE author = {$user_id} AND email != ''  AND recheck = 0");
        }

        $data['email_templates'] = EmailTemplates::all();

        return view('home.admin.dashboard.listing.list-image',$data);
    }

    public function edit_alt($id)
    {
        $user_id = Auth::user()->id;
        $data['permissions'] = Session::get('user_role')[0];
        $business = DB::select("SELECT * FROM businesses WHERE id = {$id}");
        $data['business'] = $business[0];
        return view('home.admin.dashboard.listing.edit-alt-image',$data);
    }

    public function update_alt($id, Request $request)
    {
        // Collecting Data
        $businesses = businesses::find($id);
        $businesses->name = $this->clean_string($request->input('name'));
        // Collecting Business Detail
        $businesses->slug = $this->clean_string(Str::slug($request->input('name')));
        $businesses->save();
            $success_msg = "Listing image Updated!";
            return redirect('manage/listingmedia')->with('success',$success_msg);
            // return redirect()->back()->with('success','Listing Added Successfuly!');

    }
}
