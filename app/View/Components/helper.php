<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
// use Session;

// Helper Functions
function role_text($role)
{
    if ($role == 'sadmin') {
        $role = "Super Admin";
    } elseif ($role == 'adm') {
        $role = "Admin";
    } elseif ($role == 'edt') {
        $role = "Editor";
    } elseif ($role == 'guest') {
        $role = "Guest";
    } else {
        $role_data = DB::select("SELECT * FROM user_roles WHERE id = {$role}");
        $role_data = $role_data[0];
        $role = $role_data->title;
    }

    return $role;
}

function genrate_field($name,$required=true,$autofill=true,$bootstrap=true)
{
    $bootstrap = ($bootstrap) ? "form-control" : "" ;
    echo '<input type="text" name="'.$name.'" required="'.$required.'" autofill="'.$autofill.'" class="'.$bootstrap.'">';
}

function genrate_roles_dropdoen()
{
    $roles = DB::select("SELECT * FROM user_roles");
    $options = "";
    foreach($roles AS $role) {
        $options .= "<option value='".$role->id."'>".$role->title."</option>";
    }
    echo $options;
}

function genrate_users_dropdoen($id="")
{
    $users = DB::select("SELECT id,first_name,last_name FROM users");
    $options = "";
    foreach($users AS $user) {
        $selected =($id == $user->id) ? "selected" : "";
        $options .= "<option value='".$user->id."' ".$selected.">".$user->first_name." ".$user->last_name."</option>";
    }
    echo $options;
}

function genrate_roles_dropdoen_selected($roles,$current)
{
    $options = "";
    foreach($roles AS $role) {
        $selected =($current == $role->id) ? "selected" : "";
        $options .= "<option value='".$role->id."' ".$selected.">".$role->title."</option>";
    }

    echo $options;
}

function genrate_roles_dropdown_selected_id($id)
{
    $options = "";
    $roles = DB::select("SELECT * FROM user_roles");
    foreach($roles AS $role) {
        $selected =($id == $role->id) ? "selected" : "hello";
        $options .= "<option value='".$role->id."' ".$selected.">".$role->title."</option>";
    }

    echo $options;
}

function get_Category_name($id)
{
    $category = DB::select("SELECT name FROM business_categories WHERE id = {$id}");
    // print_r($category);
    $category = $category[0];
    $category = $category->name;
    return $category;
}

function genrate_category_dropdown($type,$id="")
{
    $options = "";
    if($type == 'parent') {
        $categories = DB::select("SELECT id,name FROM business_categories WHERE parent_id = 0");
    } elseif($type == 'sub') {
        $categories = DB::select("SELECT id,name FROM business_categories WHERE parent_id != 0");
    }
    foreach ($categories AS $category) {
        $options .= "<option value='".$category->id."'>".$category->name."</option>";
    }

    echo $options;
}

function genrate_category_dropdown_selected($type,$id)
{
    $options = "";
    if($type == 'parent') {
        $categories = DB::select("SELECT id,name FROM business_categories WHERE parent_id = 0");
    } elseif($type == 'sub') {
        $categories = DB::select("SELECT id,name FROM business_categories WHERE parent_id != 0");
    }
    foreach ($categories AS $category) {
        $selected = ($category->id == $id) ? 'selected' : '' ;
        $options .= "<option value='".$category->id."' ".$selected.">".$category->name."</option>";
    }

    echo $options;
}

function genrate_state_dropdown()
{
    $options = "";
    $states = DB::select("SELECT id,state FROM states");
    foreach ($states AS $state) {
        $options .= "<option value='".$state->id."'>".$state->state."</option>";
    }

    echo $options;
}

function genrate_state_dropdown_selected($id)
{
    $options = "";
    $states = DB::select("SELECT id,state FROM states");
    foreach ($states AS $state) {
        $selected = ($state->id == $id) ? 'selected' : '' ;
        $options .= "<option value='".$state->id."' ".$selected.">".$state->state."</option>";
    }

    echo $options;
}

function genrate_area_dropdown_selected($state,$id)
{
    $options = "";
    $cities = DB::select("SELECT id,city FROM cities WHERE state_id = {$state}");
    foreach ($cities AS $city) {
        $selected = ($city->id == $id) ? 'selected' : '' ;
        $options .= "<option value='".$city->id."' ".$selected.">".$city->city."</option>";
    }

    echo $options;
}

function get_selected_text($value,$field)
{
    echo ($value == $field) ? 'selected' : '' ;
}

function convert_date($date)
{
    $date_string_prepared = date_create($date);
    $date_string = $date_string_prepared->format("d M Y");
    echo $date_string;
}

function status_text($active,$spam)
{
    $text = "";
    if($spam == 1) {
        $text = '<span class="text-danger">Spamed</span>';
    } elseif ($active == 1){
        $text = '<span class="text-success">Active</span>';
    } elseif ($active == 0){
        $text = '<span class="text-danger">Deactive</span>';
    }

    echo $text;
}

function clean_string($string)
{
    $string = str_replace("'","",$string);
    $string = str_replace('"','',$string);
    $string = str_replace('/','',$string);
    $string = htmlspecialchars($string, ENT_QUOTES);
    echo $string;
}

function genrate_recheck_text($email,$logo)
{
    $text = 'Update ';
    $logo_file = public_path(). "/business/listings/logo/".$logo;
    if ($email == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $text .= "Email &";
    }
    
    if ($logo == "" || !file_exists($logo_file)) {
        $text .= " Logo &";
    }

    echo "<span class='text-danger'>".substr($text, 0, -1)."<span>";
}

function time_converter($time)
{
    echo date("g:i a" ,strtotime($time));
}

function get_field($id,$field,$table,$column)
{
    $data = DB::select("SELECT {$field} FROM {$table} WHERE {$column} = {$id}");
    $data = $data[0];
    return $data->$field;
}

function count_total($table,$where = '')
{
    $data = DB::select("SELECT COUNT(*) AS Total FROM {$table} {$where}");
    $data = $data[0];
    return $data->Total;
}

function avg_total($table,$where = '')
{
    $data = DB::select("SELECT COUNT(*) AS TotalRows,SUM(rating) AS TOTAL FROM {$table} {$where}");
    if ($data[0]->TotalRows > 0) {
        $data = $data[0];
        return $data->TOTAL/$data->TotalRows;
    } else {
        return 0;
    }
}

function check_user_logged()
{
    print_r(auth());
    // return Auth::user()->user_portal;
}

?>