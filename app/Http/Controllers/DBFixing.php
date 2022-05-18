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

class DBFixing extends Controller
{
    public function index()
    {
        echo '<h1>DB Fixing</h1><hr>';
        $businesses = DB::select("SELECT * FROM businesses");
        $counter = 0;
        foreach($businesses AS $business){
            $parent = $business->parent_category_text;
            $sub = $business->sub_category_text;
            $bg = "";
            if($business->city_text =='' ) {
                $bg = "style='background:yellow'";
                $counter++;
                // $db_data = businesses::find($business->id);
                // $db_data->city = 398;
                // // $db_data->city_text = "Ayal Nasir";
                // $db_data->save();
                
            }
            // echo "<p {$bg}> ".$business->id." |  ".$business->pcategories." | <span style='color:red'>".$business->categories."<span><hr></p>";
            echo "<p {$bg}> ".$business->id." |  ".$business->city." | <span style='color:red'>".$business->city_text.$business->state."<span><hr></p>";
        }
        echo $counter;
    }

    public function get_category_name($id)
    {
        $category = DB::select("SELECT name FROM business_categories WHERE id = {$id}");
        // print_r($category);
        $category = $category[0];
        $category = $category->name;
        return $category;
    }
}
