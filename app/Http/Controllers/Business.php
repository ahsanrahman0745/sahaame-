<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;


use Illuminate\Http\Request;
Use DB;
use App\Models\Businesses;
use App\Models\AddBusinesses;
use Illuminate\Support\Facades\Auth;
use App\Models\SearchTrackings;
use App\Models\ListingReviews;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Business extends Controller
{
    public $per_page = 5;

    public function index()
    {
        return view('business/search');
    }

    public function profile()
    {
        return view('home/business/profile');
    }

    public function search(Request $request)
    {
        // print_r($request->all());
        $term='';
        $location='';
        $category='';
        $services='';
        $meta='';
        $star='';
        $term_where='';
        $location_where='';
        $category_where='';
        $services_where='';
        $meta_where='';
        $star_where='';
        $select = $this->genrate_selected_fields();
        $sql = "SELECT ".$select." FROM businesses";
        $order_by = 'ORDER BY id DESC';
        $temp_counter = 0;

        $sql_array =[];
        $search_trackings = new SearchTrackings();

        if(isset($request->term)){

            $temp_counter = 1;
            $term_where = $this->genrate_sql('term',$this->clean_string($request->term));
            array_push($sql_array,$term_where);
            $data['term'] = $request->term;
            $search_trackings->term = $request->term;

        }

        if(isset($request->category)){

            $temp_counter = 1;
            $category_text = htmlspecialchars($this->clean_string($request->category));
            $category_where = "( pcategories = ".$category_text." OR categories = ".$category_text.") ";
            array_push($sql_array,$category_where);
            $data['category'] = $category_text;
            $search_trackings->category = $request->category;

        }

        if(isset($request->meta)){

            $temp_counter = 1;
            $meta = $this->clean_string($request->meta);
            $order_by = "ORDER BY (CASE WHEN meta_title_slug = '{$meta}' THEN 1 ELSE 2 END), id DESC";
            $search_trackings->meta = $request->meta;
            $search_trackings->source = 'link';

        }

        if(isset($request->services)){

            $temp_counter = 1;
            $services = $request->services;
            $services_array = explode(',',$services);
            for ($i=0; $i<count($services_array); $i++){
                $services_where = $this->genrate_sql('services',$this->clean_string($services_array[$i]));
                array_push($sql_array,$services_where);
            }

        }

        if(isset($request->location)){

            $temp_counter = 1;
            $location_where = '|AND '.$this->genrate_sql('location',$this->clean_string($request->location));
            array_push($sql_array,$location_where);
            $data['location'] = $request->location;
            $search_trackings->location = $request->location;

        }

        if(isset($request->star)){
            $temp_counter = 1;
            $star_where = '|AND '.$this->genrate_sql('star',$this->clean_string($request->star));
            array_push($sql_array,$star_where);
            $data['star'] = $request->star;
        }

        $sql = ($temp_counter != 0) ? $sql." WHERE " : $sql ;
        $track = ($temp_counter != 0) ? true : false ;

        if($track) {
            $search_trackings->save();
        }

        // Join SQL
        $final_sql = '';
        for ($i=0; $i<count($sql_array); $i++) {
            $final_sql .= $sql_array[$i].' OR';
        }

        // Merging SQL
        $final_sql = substr($final_sql, 0, -2);
        $sql = $sql.$final_sql;
        $sql = ($temp_counter !=0 ) ? $sql." AND spam =0 AND active = 1 ".$order_by : $sql." WHERE spam =0 AND active = 1 ";
        $sql = str_replace("OR|AND", " AND ", $sql);
        $sql = str_replace("|AND", " ", $sql);

        // GET Data
        $data['businesses'] = DB::select($sql);
        // $data['businesses'] = DB::select("SELECT ".$select." FROM businesses");
        $count = count($data['businesses']);
        if (count($data['businesses']) != 0) {
            $bussiness_json = json_encode($data['businesses']);
        } else {
            $data['error'] = "We couldn't found any Business. Try somthing else.";
        }

        // GET Categories
        $all_categories = $this->extract_categories($data['businesses']);
        $sql = "SELECT id,name FROM business_categories WHERE ";
        for ($i=0; $i<count($all_categories); $i++){
            $sql .= " parent_id=".$all_categories[$i]." OR";
        }
        $sql = substr($sql, 0, -2);
        $data['categories'] = DB::select($sql." ORDER BY RAND()  LIMIT 15");

        // GET Services
        $sql = "SELECT id,title FROM user_services_list WHERE ";
        for ($i=0; $i<count($all_categories); $i++){
            $sql .= " parent_category=".$all_categories[$i]." OR";
        }
        $sql = substr($sql, 0, -2);
        $data['services'] = DB::select($sql." ORDER BY RAND() LIMIT 15");

        // Pagination Variabls
        $data['show_pagiation']['status'] = 'no';
        if($count > $this->per_page) {
            $data['show_pagiation']['status'] = 'yes';
        }
        $data['show_pagiation']['per_page'] = $this->per_page;
        $data['show_pagiation']['total_listings'] = $count;
        $data['show_pagiation']['pages'] = $this->pagination_pages_count($count);
        $data['pagination_json'] =  json_encode($data['show_pagiation']);
        $data['page_type'] = 'search';
        return view('home/business/search',$data);

    }

    // public function search($parms)
    public function search_parms($parms)
    {
        # Init Vars
        $term='';
        $location='';
        $category='';
        $services='';
        $meta='';
        $star='';
        $term_where='';
        $location_where='';
        $category_where='';
        $services_where='';
        $meta_where='';
        $star_where='';
        $select = $this->genrate_selected_fields();
        dd($select);
        $sql = "SELECT ".$select." FROM businesses";
        $order_by = 'ORDER BY id DESC';
        $temp_counter = 0;

        $parms = $this->extract_parms($parms);
        $sql_array =[];
        $sql = (count($parms)) ? $sql." WHERE " : $sql ;

        $track = (count($parms)) ? true : false ;
        $search_trackings = new SearchTrackings();

        for($i=0; $i<count($parms); $i++) {

            if(isset($parms[$i]['term'])){

                $temp_counter = 1;
                $term_where = $this->genrate_sql('term',$this->clean_string($parms[$i]['term']));
                array_push($sql_array,$term_where);
                $data['term'] = $parms[$i]['term'];
                $search_trackings->term = $parms[$i]['term'];

            }

            if(isset($parms[$i]['category'])){

                $temp_counter = 1;
                $category_text = htmlspecialchars($this->clean_string($parms[$i]['category']));
                $category_where = "( pcategories = ".$category_text." OR categories = ".$category_text.") ";
                array_push($sql_array,$category_where);
                $data['category'] = $category_text;
                $search_trackings->category = $parms[$i]['category'];

            }

            if(isset($parms[$i]['meta'])){

                $temp_counter = 1;
                $meta = $this->clean_string($parms[$i]['meta']);
                $order_by = "ORDER BY (CASE WHEN meta_title_slug = '{$meta}' THEN 1 ELSE 2 END), id DESC";
                $search_trackings->meta = $parms[$i]['meta'];
                $search_trackings->source = 'link';

            }

            if(isset($parms[$i]['services'])){

                $temp_counter = 1;
                $services = $parms[$i]['services'];
                $services_array = explode(',',$services);
                for ($i=0; $i<count($services_array); $i++){
                    $services_where = $this->genrate_sql('services',$this->clean_string($services_array[$i]));
                    array_push($sql_array,$services_where);
                }

            }

            if(isset($parms[$i]['location'])){

                $temp_counter = 1;
                $location_where = '|AND '.$this->genrate_sql('location',$this->clean_string($parms[$i]['location']));
                array_push($sql_array,$location_where);
                $data['location'] = $parms[$i]['location'];
                $search_trackings->location = $parms[$i]['location'];

            }

            if(isset($parms[$i]['star'])){
                $temp_counter = 1;
                $star_where = '|AND '.$this->genrate_sql('star',$this->clean_string($parms[$i]['star']));
                array_push($sql_array,$star_where);
                $data['star'] = $parms[$i]['star'];
            }

        }

        if($track) {
            $search_trackings->save();
        }

        // Join SQL
        $final_sql = '';
        for ($i=0; $i<count($sql_array); $i++) {
            $final_sql .= $sql_array[$i].' OR';
        }

        // Merging SQL
        $final_sql = substr($final_sql, 0, -2);
        $sql = $sql.$final_sql;
        $sql = ($temp_counter !=0 ) ? $sql." AND spam =0 AND active = 1 ".$order_by : $sql." WHERE spam =0 AND active = 1 ";
        $sql = str_replace("OR|AND", " AND ", $sql);
        $sql = str_replace("|AND", " ", $sql);

        // GET Data
        $data['businesses'] = DB::select($sql);
        // $data['businesses'] = DB::select("SELECT ".$select." FROM businesses");
        $count = count($data['businesses']);
        if (count($data['businesses']) != 0) {
            $bussiness_json = json_encode($data['businesses']);
        } else {
            $data['error'] = "We couldn't found any Business. Try somthing else.";
        }

        // GET Categories
        $all_categories = $this->extract_categories($data['businesses']);
        $sql = "SELECT id,name FROM business_categories WHERE ";
        for ($i=0; $i<count($all_categories); $i++){
            $sql .= " parent_id=".$all_categories[$i]." OR";
        }
        $sql = substr($sql, 0, -2);
        $data['categories'] = DB::select($sql." ORDER BY RAND()  LIMIT 15");

        // GET Services
        $sql = "SELECT id,title FROM user_services_list WHERE ";
        for ($i=0; $i<count($all_categories); $i++){
            $sql .= " parent_category=".$all_categories[$i]." OR";
        }
        $sql = substr($sql, 0, -2);
        $data['services'] = DB::select($sql." ORDER BY RAND() LIMIT 15");

        // Pagination Variabls
        $data['show_pagiation']['status'] = 'no';
        if($count > $this->per_page) {
            $data['show_pagiation']['status'] = 'yes';
        }
        $data['show_pagiation']['per_page'] = $this->per_page;
        $data['show_pagiation']['total_listings'] = $count;
        $data['show_pagiation']['pages'] = $this->pagination_pages_count($count);
        $data['pagination_json'] =  json_encode($data['show_pagiation']);
        $data['page_type'] = 'search';
        return view('home/business/search',$data);


    }

    public function genrate_sql($type,$keyword,$table='')
    {

        $sql = '';
        if ($type=='term') {
            # Name
            $sql .= "( name LIKE '%{$keyword}%' ";
            $sql .= " OR short_desc LIKE '%{$keyword}%' ";
            $sql .= " OR parent_category_text LIKE '%{$keyword}%' ";
            $sql .= " OR sub_category_text LIKE '%{$keyword}%' ";
            $sql .= " OR stitle_1 LIKE '%{$keyword}%' ";
            $sql .= " OR stitle_2 LIKE '%{$keyword}%' ";
            $sql .= " OR stitle_3 LIKE '%{$keyword}%' ";
            $sql .= " OR stitle_4 LIKE '%{$keyword}%' ";
            $sql .= " OR stitle_5 LIKE '%{$keyword}%' ";
            $sql .= " OR stitle_6 LIKE '%{$keyword}%' ";
            $sql .= " OR meta_desc LIKE '%{$keyword}%' ";
            $sql .= " OR mtitle LIKE '%{$keyword}%' )";
        }

        if ($type=='location') {
            # Location
            $sql .= "( country LIKE '%{$keyword}%' ";
            $sql .= " OR state_text LIKE '%{$keyword}%' ";
            $sql .= " OR city_text LIKE '%{$keyword}%' ";
            $sql .= " OR buildingname LIKE '%{$keyword}%' ";
            $sql .= " OR streetname LIKE '%{$keyword}%' )";
        }

        if ($type=='services') {
            # Services
            $sql .= "( stitle_1 LIKE '%{$keyword}%' ";
            $sql .= " OR stitle_2 LIKE '%{$keyword}%' ";
            $sql .= " OR stitle_3 LIKE '%{$keyword}%' ";
            $sql .= " OR stitle_4 LIKE '%{$keyword}%' ";
            $sql .= " OR stitle_5 LIKE '%{$keyword}%' ";
            $sql .= " OR stitle_6 LIKE '%{$keyword}%' )";
        }

        if ($type=='star') {
            # Star
            $sql .= "( ranking_stars = {$keyword} )";
        }

        return $sql;
    }

    public function genrate_selected_fields()
    {
        $select = '';
        $select .= 'id,';
        $select .= 'name,';
        $select .= 'slug,';
        $select .= 'short_desc,';
        $select .= 'pcategories,';
        $select .= 'parent_category_text,';
        $select .= 'categories,';
        $select .= 'sub_category_text,';
        $select .= 'logo,';
        $select .= 'snipshot,';
        $select .= 'phone,';
        $select .= 'phone_text,';
        $select .= 'email,';
        $select .= 'whatsapp,';
        $select .= 'website,';
        $select .= 'office,';
        $select .= 'floor,';
        $select .= 'buildingname,';
        $select .= 'streetname,';
        $select .= 'city_text,';
        $select .= 'state_text,';
        $select .= 'country,';
        $select .= 'mon_open_time,';
        $select .= 'mon_close_time,';
        $select .= 'review_stars,';
        $select .= 'stitle_1,';
        $select .= 'stitle_2,';
        $select .= 'stitle_3,';
        $select .= 'stitle_4,';
        $select .= 'stitle_5,';
        $select .= 'stitle_6,';
        $select .= 'verified,';
        $select .= 'mini_site_link,';
        $select .= 'ranking_stars,';
        $select .= 'spam,';
        $select .= 'active';

        return $select;
    }

    public function pagination_pages_count($results)
    {
        $digit = $results/$this->per_page;
        $rounded = round($results/$this->per_page);
        $total_pages = $rounded;
        if ($digit > $rounded) {
            $total_pages = intval($rounded)+1;
        }

        return $total_pages;
    }

    public function extract_parms($parms)
    {
        $parms_array = [];
        if (strpos($parms, '|')) {
            $parms = explode('|',$parms);
            for ($i=0; $i < count($parms); $i++) {
                if (strpos($parms[$i], '=')) {
                    $sub_params = explode('=',$parms[$i]);
                    if($sub_params[0] == '' || $sub_params[1] == "" || $sub_params[1] == "null"){
                        // unset($parms[$i]);
                    } else {
                        array_push($parms_array,[$sub_params[0] => $sub_params[1]]);
                    }
                }
            }
            return $parms_array;
        }
    }

    public function extract_categories($businesses)
    {
        $categories = [];
        $cat_count=0;
        foreach($businesses AS $business) {
            for ($i=0; $i<count($categories); $i++) {
                if($categories[$i][0] != $business->pcategories) {
                    $cat_count=0;
                } else {
                    $cat_count=1;
                }
            }
            // if($cat_count==0) {array_push($categories,$business->pcategories.",".$business->parent_category_text);}
            if($cat_count==0) {array_push($categories,$business->pcategories);}
        }
        $count = count($categories);
        if($count != 1) {
            $temp_array = array_count_values($categories);
            $final_categories = array();
            foreach($temp_array as $key=>$val){
                if($val >1){
                $final_categories[] = $key;
                }
            }
            $categories = $final_categories;
        }

        return $categories;
    }

    public function show_detail($slug)
    {
        $data['business'] = DB::select("SELECT * FROM businesses WHERE slug = '{$slug}'");
        $data['business'] = $data['business'][0];
        $id = $data['business']->id;
        $reviews = DB::select("SELECT * FROM listing_reviews WHERE listing_id ={$id} ORDER BY created_at ASC");
        if (count($reviews) > 0) {
            $data['reviews'] = $reviews;
        }
        return view('home/business/detail',$data);
    }

    public function clean_string($string)
    {
        $string = str_replace("'","",$string);
        $string = str_replace('"','',$string);
        $string = str_replace('/','',$string);
        $string = htmlspecialchars($string, ENT_QUOTES);
        return $string;
    }

    public function save_review(Request $request)
    {
        $review = new ListingReviews;
        $review->listing_id = $request->listing_id;
        $review->review = $request->title;
        $review->review = $request->review;

        if(!Auth::check()) {
            $review->name = $request->name;
            $review->email = $request->email;
            $review->user_type = 'unknown';
        } else {
            $review->user_id = Auth::user()->id;
            $review->user_type = 'registered';
        }
        $review->rating = $request->rating;
        $review->save();

        return redirect()->back()->with('success','Review added successfully');
    }

    public function add_yours()
    {
        return view('home/business/add');
    }

    public function insert_add_yours(Request $request)
    {
        $slug = Str::slug($request->business_name,'-');
        $business_logo = "";
        $business_profile = "";
        $business_portfolio = "";
        $business_video = "";
        if ($request->file('business_logo')){
        $business_logo = $slug."-".md5(time()).'.'.$request->business_logo->extension();
        $request->file('business_logo')->move(public_path('business/business-request/logo'), $business_logo);
        }

        if ($request->file('business_profile')){
        $business_profile = $slug."-".md5(time()).'.'.$request->business_profile->extension();
        $request->file('business_profile')->move(public_path('business/business-request/profile'), $business_profile);
        }

        if ($request->file('business_portfolio')){
        $business_portfolio = $slug."-".md5(time()).'.'.$request->business_portfolio->extension();
        $request->file('business_portfolio')->move(public_path('business/business-request/portfolio'), $business_portfolio);
        }

        if ($request->file('business_video')){
        $business_video = $slug."-".md5(time()).'.'.$request->business_video->extension();
        $request->file('business_video')->move(public_path('business/business-request/video'), $business_video);
        }

        $add_business = new AddBusinesses();
        $add_business->owner_type = $request->owner_type;
        $add_business->owner_name = $request->owner_name;
        $add_business->owner_email = $request->owner_email;
        $add_business->owner_phone = $request->owner_phone;
        $add_business->business_title = $request->business_title;
        $add_business->business_type = $request->business_type;
        $add_business->business_category = $request->business_category;
        $add_business->business_sub_category = $request->business_sub_category;
        $add_business->business_year = $request->business_year;

        $add_business->business_logo = $business_logo;
        $add_business->business_profile = $business_profile;
        $add_business->business_portfolio = $business_portfolio;
        $add_business->business_video = $business_video;

        $add_business->business_detail = $request->business_detail;
        $add_business->service_01 = $request->service_01;
        $add_business->service_02 = $request->service_02;
        $add_business->service_03 = $request->service_03;
        $add_business->service_04 = $request->service_04;
        $add_business->service_05 = $request->service_05;
        $add_business->service_06 = $request->service_06;
        $add_business->office = $request->office;
        $add_business->floor = $request->floor;
        $add_business->building_name = $request->building_name;
        $add_business->street_name = $request->street_name;
        $add_business->city = $request->city;
        $add_business->area = $request->area;
        $add_business->business_phone = $request->business_phone;
        $add_business->business_email = $request->business_email;
        $add_business->business_whatsapp = $request->business_whatsapp;
        $add_business->business_messenger = $request->business_messenger;
        $add_business->business_location = $request->business_location;
        $add_business->facebook_page = $request->facebook_page;
        $add_business->monday_open = $request->monday_open;
        $add_business->monday_close = $request->monday_close;
        $add_business->tuesday_open = $request->tuesday_open;
        $add_business->tuesday_close = $request->tuesday_close;
        $add_business->wednesday_open = $request->wednesday_open;
        $add_business->wednesday_close = $request->wednesday_close;
        $add_business->thurday_open = $request->thurday_open;
        $add_business->thurday_close = $request->thurday_close;
        $add_business->frieday_open = $request->frieday_open;
        $add_business->frieday_close = $request->frieday_close;
        $add_business->saturday_open = $request->saturday_open;
        $add_business->saturday_close = $request->saturday_close;
        $add_business->sunday_open = $request->sunday_open;
        $add_business->sunday_close = $request->sunday_close;
        $add_business->save();
        return redirect()->back()->with('success','Requested  successfully');
    }

    public function request_list()
    {
        $data['requests'] = AddBusinesses::all();
        return view('home/admin/dashboard/business-request',$data);
    }
}
