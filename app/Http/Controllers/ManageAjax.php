<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\businesses;
use Illuminate\Support\Str;
use DB;

class ManageAjax extends Controller
{
    public function get_sub_categories($id)
    {
        $options = "";
        $categories = DB::select("SELECT id,name FROM business_categories WHERE parent_id = {$id}");
        foreach ($categories AS $category) {
            $options .= "<option value='".$category->id."'>".$category->name."</option>";
        }

        echo $options;
    }

    public function get_areas($id)
    {
        $options = "<option value='' hidden>Choose Area</option>";
        $cities = DB::select("SELECT id,city FROM cities WHERE state_id = {$id}");
        foreach ($cities AS $city) {
            $options .= "<option value='".$city->id."'>".$city->city."</option>";
        }

        echo $options;
    }

    public function bulk_action(Request $request)
    {
        $action = $request->action;
        $bulk_ids = $request->bulk_ids;
        $bulk_ids = explode(',',$bulk_ids);
        $count_ids = count($bulk_ids);
        $success_msg = '';
        for ($i=0; $i<$count_ids; $i++) {
            if ($action == 'send_email') {
                
            } else {
                if ($action == 'verified') {
                    $businesses= businesses::where('id', $bulk_ids[$i])->update(array('varified' =>1));

                } elseif ($action == 'unverified') {
                    $businesses= businesses::where('id', $bulk_ids[$i])->update(array('varified' =>0));
                }
            }
        }
    }

    public function check_name(Request $request)
    {
        $name = $this->clean_string(Str::slug($request->name));
        if (isset($request->id)) {
            $id = $request->id;
            $businesses = DB::select("SELECT COUNT(*) AS TOTAL FROM businesses WHERE slug  = '{$name}' AND id != {$id}");
        } else {
            $businesses = DB::select("SELECT COUNT(*) AS TOTAL FROM businesses WHERE slug  = '{$name}'");
        }
        $count = intval($businesses[0]->TOTAL);
        echo $count;
    }

    public function get_users($id)
    {
        $users = DB::select("SELECT id,first_name,last_name FROM users WHERE role={$id}");
        $options = "";
        foreach($users AS $user) {
            $options .= "<option value='".$user->id."'>".$user->first_name." ".$user->last_name."</option>";
        }
        echo $options;
    }

    public function clean_string($string)
    {
        $string = str_replace("'","",$string);
        $string = str_replace('"','',$string);
        $string = str_replace('/','',$string);
        $string = htmlspecialchars($string, ENT_QUOTES);
        return $string;
    }
}
