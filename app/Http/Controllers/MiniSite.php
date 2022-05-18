<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
use App\Models\MiniSites;
use App\Models\businesses;
use App\Models\MiniSiteOverview;
use App\Models\MiniSiteService;
use App\Models\MiniSiteProject;
use App\Models\MiniSitePromotion;
// use Illuminate\Http\UploadedFile;
// use App\Http\Requests\StoreFileRequest;

class MiniSite extends Controller
{
    // public $base_folder = 'business/';
    public $vars = array(
        'base_folder' => 'business/',
        'basic_info_folder' => 'business/mini-site-resources/basic-info/',
        'service_folder' => 'business/mini-site-resources/services/',
        'promotion_folder' => 'business/mini-site-resources/promotions/',
        'project_folder' => 'business/mini-site-resources/projects/',
        'upload' => true
    );
    public function index()
    {
        return view('home/admin/mini-site/business-list');
    }

    public function dashboard($business_id)
    {
        $data['form_name'] = 'Add Basic Information';
        $data['inc_scripts'] = true;
        $data['business_id'] = $business_id;
        $data['businesses'] = DB::select("SELECT id,name,short_desc FROM businesses WHERE active = 1");
        return view('home/admin/mini-site/dashboard/dashboard',$data);
    }

    public function mini_site_list()
    {
        $data['form_name'] = 'All Mini Sites';
        $data['inc_scripts'] = true;
        $data['mini_sites'] = DB::select("SELECT * FROM mini_sites");
        return view('home/admin/mini-site/list',$data);
    }

    public function business_list()
    {
        $data['businesses'] = DB::select("SELECT id,name,short_desc FROM businesses WHERE active = 1 AND mini_site_link IS NULL");
        return view('home/admin/mini-site/business-list',$data);
    }

    public function add_minisite_panel($id)
    {
        $data['business_id'] = $id;
        return view('home/admin/mini-site/add-mini-site',$data);
    }

    public function basic_info_form($id)
    {
        $data['business_id'] = $id;
        $data['form_name'] = 'Add Basic Information';
        $data['inc_scripts'] = true;
        $site_info = DB::select("SELECT * from mini_sites WHERE business_id = {$id}");
        if (count($site_info) == 1) {
            $data['site_info'] = $site_info[0];
        }
        return view('home/admin/mini-site/form/basic-info',$data);
    }

    public function insert_basic_info($id,Request $request)
    {
        extract($this->vars);

        // Uploading Site Logo

        $request->validate([
            'site_logo_image' => 'dimensions:max_width=250,max_height=250',
        ]);

        $imageName = time().'.'.$request->site_logo_image->extension();

        $request->file('site_logo_image')->move(public_path($basic_info_folder), $imageName);

//        dd($imageName);
//        $site_logo_name = $id."-".md5(time()).'.'.$request->site_logo_image->extension();
//        $request->file('site_logo_image')->move(public_path($basic_info_folder), $site_logo_name);
//        $site_logo_name = $id."-".md5(time()).'.'.$request->site_logo_image->extension();
        $site_banner_name = $id."-".md5(time()).'.'.$request->site_banner->extension();
        $request->file('site_banner')->move(public_path($basic_info_folder), $site_banner_name);
        $minisite_verifier = DB::select("SELECT id from mini_sites WHERE business_id = {$id}");
        $count = count($minisite_verifier);

        $business = businesses::find($id);
        $business->mini_site_link = 'true';
        $business->save();

        $minisite = ($count > 0 ) ? MiniSites::find($minisite_verifier[0]->id) : new MiniSites ;

        # Collecting Data
        $minisite->business_id = $id;
        $minisite->site_title = $request['site_title'];
        $minisite->site_logo = $imageName;
        $minisite->site_banner = $site_banner_name;
        $minisite->phone = $request['phone'];
        $minisite->email = $request['email'];
        $minisite->contact_text = $request['contact_text'];
        $minisite->contact_button = $request['contact_button'];
        $minisite->facebook = $request['facebook'];
        $minisite->instagram = $request['instagram'];
        $minisite->twitter = $request['twitter'];
        $minisite->opening_text = $request['opening_text'];
        $minisite->company_text = $request['company_text'];
        $minisite->years_inbusiness = $request['years_inbusiness'];

        $minisite->save();


        $data['site_info'] = DB::select("SELECT * from mini_sites WHERE business_id = {$id}");
        $data['site_info'] = $data['site_info'][0];

        $data['business_id'] = $id;
        $data['form_name'] = 'Add Basic Information';
        $data['inc_scripts'] = true;
        return redirect("admin/mini-site/{$id}/basic-info/form")->with('success','You have successfully upload image.')->with('image',$imageName);

    }

    public function company_overview_form($id)
    {
        $data['business_id'] = $id;
        $data['form_name'] = 'Add Company Overview';
        $data['inc_scripts'] = true;
        $site_overview = DB::select("SELECT * from mini_site_overviews WHERE business_id = {$id}");
        if (count($site_overview) == 1) {
            $data['site_overview'] = $site_overview[0];
        }
        return view('home/admin/mini-site/form/company-overview',$data);
    }

    public function insert_company_overview($id,Request $request)
    {
        print_r($request->all());
        extract($this->vars);
        $site_id = $this->get_site_id($id)->id;


        $minisite_overview = (isset($request->overview_id)) ? MiniSiteOverview::find($request->overview_id) : new MiniSiteOverview;

        # Collecting Data
        if (!isset($request->overview_id)) {
            echo "hello";
            $minisite_overview->site_id = $site_id;
            $minisite_overview->business_id = $id;
        }
        $minisite_overview->business_type = $request['business_type'];
        $minisite_overview->country_region = $request['country_region'];
        $minisite_overview->main_service = $request['main_service'];
        $minisite_overview->employees = $request['employees'];
        $minisite_overview->revenue = $request['revenue'];
        $minisite_overview->year_established = $request['year_established'];
        $minisite_overview->leadership = $request['leadership'];
        $minisite_overview->main_markets = $request['main_markets'];
        $minisite_overview->mobile = $request['mobile'];
        $minisite_overview->license = $request['license'];
        $minisite_overview->whatsapp = $request['whatsapp'];
        $minisite_overview->email = $request['email'];
        $minisite_overview->basic_information = $request['basic_information'];
        // die;
        $minisite_overview->save();


        // $this->upload($request->site_logo,$site_logo_name,$basic_info_folder);
        // $this->upload($request->site_banner,$site_banner_name,$basic_info_folder);


        $data['business_id'] = $id;
        $data['form_name'] = 'Add Basic Information';
        $data['inc_scripts'] = true;
        return redirect()->back();
    }


    //.................................................................................
    //...SSSSSSS....EEEEEEEEEEE.RRRRRRRRRR.RRVVV....VVVVVIII....CCCCCCC...CEEEEEEEEEE..
    //..SSSSSSSSS...EEEEEEEEEEE.RRRRRRRRRRR.RVVV....VVVVVIII...CCCCCCCCC..CEEEEEEEEEE..
    //..SSSSSSSSSS..EEEEEEEEEEE.RRRRRRRRRRR.RVVV...VVVVVVIII..CCCCCCCCCCC.CEEEEEEEEEE..
    //.SSSSS..SSSS..EEEE........RRRR...RRRRRRVVVV..VVVV.VIII.ICCCC...CCCC.CEEE.........
    //.SSSSS........EEEE........RRRR...RRRRR.VVVV..VVVV.VIII.ICCC....CCC..CEEE.........
    //..SSSSSSS.....EEEEEEEEEE..RRRRRRRRRRR..VVVV..VVVV.VIII.ICCC.........CEEEEEEEEEE..
    //...SSSSSSSSS..EEEEEEEEEE..RRRRRRRRRRR..VVVV.VVVV..VIII.ICCC.........CEEEEEEEEEE..
    //.....SSSSSSS..EEEEEEEEEE..RRRRRRRR......VVVVVVVV..VIII.ICCC.........CEEEEEEEEEE..
    //........SSSSS.EEEE........RRRR.RRRR.....VVVVVVVV..VIII.ICCC....CCC..CEEE.........
    //.SSSS....SSSS.EEEE........RRRR..RRRR....VVVVVVV...VIII.ICCCC...CCCCCCEEE.........
    //.SSSSSSSSSSSS.EEEEEEEEEEE.RRRR..RRRRR....VVVVVV...VIII..CCCCCCCCCCC.CEEEEEEEEEE..
    //..SSSSSSSSSS..EEEEEEEEEEE.RRRR...RRRRR...VVVVVV...VIII...CCCCCCCCC..CEEEEEEEEEE..
    //...SSSSSSSS...EEEEEEEEEEE.RRRR....RRRR...VVVVV....VIII....CCCCCCC...CEEEEEEEEEE..
    //.................................................................................


    public function list_services($business_id)
    {
        $data['business_id'] = $business_id;
        $data['page_name'] = 'All Services';
        $data['inc_scripts'] = true;
        $data['services'] = DB::select("SELECT * FROM mini_site_services WHERE business_id = {$business_id}");
        return view('home/admin/mini-site/list/services',$data);
    }

    public function services_list($id)
    {
        $data['business_id'] = $id;
        $data['page_name'] = 'All Services';
        $data['inc_scripts'] = true;

        return view('home/admin/mini-site/list/services',$data);
    }

    public function services_form($id)
    {
        $data['business_id'] = $id;
        $data['form_name'] = 'Add Services';
        $data['inc_scripts'] = true;

        return view('home/admin/mini-site/form/services',$data);
    }

    public function services_edit_form($id,$service_id)
    {
        $data['business_id'] = $id;
        $data['form_name'] = 'Edit Services';
        $data['inc_scripts'] = true;

        $service_data = DB::select("SELECT * FROM mini_site_services WHERE id={$service_id}");
        $data['service_data'] = $service_data[0];

        return view('home/admin/mini-site/form/edit_service',$data);
    }

    public function insert_services($id,Request $request)
    {
        extract($this->vars);
        $site_id = $this->get_site_id($id)->id;
        $image_name = $id."-".md5(time()).'.'.$request->image->extension();
        $request->file('image')->move(public_path($service_folder), $image_name);

        $minisite_service = new MiniSiteService;

        # Collecting Data
        $minisite_service->site_id = $site_id;
        $minisite_service->business_id = $id;
        $minisite_service->title = $request['title'];
        $minisite_service->image = $image_name;
        $minisite_service->description = $request['description'];

        $minisite_service->save();

        // $this->upload($request->site_logo,$site_logo_name,$basic_info_folder);
        // $this->upload($request->site_banner,$site_banner_name,$basic_info_folder);


        $data['business_id'] = $id;
        $data['form_name'] = 'Add Services';
        $data['inc_scripts'] = true;
        return redirect()->back()->with('success','Service Added Successfuly');
    }

    public function services_update($business_id,$service_id,Request $request)
    {
        print_r($request->all());
        extract($this->vars);


        $minisite_service = MiniSiteService::find($service_id);

        # Collecting Data
        $minisite_service->title = $request['title'];
        $minisite_service->description = $request['description'];
        // Upload Image
        if($request->image) {
            $image_name = $service_id."-".md5(time()).'.'.$request->image->extension();
            $request->file('image')->move(public_path($service_folder), $image_name);
            $minisite_service->image = $image_name;
        }
        $minisite_service->save();
        return redirect()->back()->with('success','Service Updated Successfuly');
    }

    public function services_delete($business_id,$service_id)
    {
        MiniSiteService::find($service_id)->delete();
        return redirect()->back()->with('success','Service Deleted Successfuly');
    }


    //...................................................................................................
    //.PPPPPPPPP...PRRRRRRRRR.....OOOOOOO.........JJJJ..JEEEEEEEEEE.ETTTTTTTTTT..CCCCCCC.....SSSSSSS.....
    //.PPPPPPPPPP..PRRRRRRRRRR...OOOOOOOOOO.......JJJJ..JEEEEEEEEEE.ETTTTTTTTTT.CCCCCCCCC...CSSSSSSSS....
    //.PPPPPPPPPPP.PRRRRRRRRRR..ROOOOOOOOOOO......JJJJ..JEEEEEEEEEE.ETTTTTTTTTTTCCCCCCCCCC..CSSSSSSSSS...
    //.PPPP...PPPP.PRRR...RRRRR.ROOOO..OOOOO......JJJJ..JEEE...........TTTT....TCCC...CCCCCCCSSS..SSSS...
    //.PPPP...PPPP.PRRR...RRRRRRROOO....OOOOO.....JJJJ..JEEE...........TTTT...TTCC.....CCC.CCSSS.........
    //.PPPPPPPPPPP.PRRRRRRRRRR.RROO......OOOO.....JJJJ..JEEEEEEEEE.....TTTT...TTCC..........CSSSSSS......
    //.PPPPPPPPPP..PRRRRRRRRRR.RROO......OOOO.....JJJJ..JEEEEEEEEE.....TTTT...TTCC...........SSSSSSSSS...
    //.PPPPPPPPP...PRRRRRRR....RROO......OOOO.....JJJJ..JEEEEEEEEE.....TTTT...TTCC.............SSSSSSS...
    //.PPPP........PRRR.RRRR...RROOO....OOOOOOOJJ.JJJJ..JEEE...........TTTT...TTCC.....CCC........SSSSS..
    //.PPPP........PRRR..RRRR...ROOOO..OOOOO.OOJJ.JJJJ..JEEE...........TTTT....TCCC...CCCCCCCSS....SSSS..
    //.PPPP........PRRR..RRRRR..ROOOOOOOOOOO.OOJJJJJJJ..JEEEEEEEEEE....TTTT....TCCCCCCCCCC.CCSSSSSSSSSS..
    //.PPPP........PRRR...RRRRR..OOOOOOOOOO..OOJJJJJJ...JEEEEEEEEEE....TTTT.....CCCCCCCCCC..CSSSSSSSSS...
    //.PPPP........PRRR....RRRR....OOOOOO.....OJJJJJ....JEEEEEEEEEE....TTTT......CCCCCCC.....SSSSSSSS....
    //...................................................................................................


    public function list_project($business_id)
    {
        $data['business_id'] = $business_id;
        $data['page_name'] = 'All Projects';
        $data['inc_scripts'] = true;
        $data['projects'] = DB::select("SELECT * FROM mini_site_projects WHERE business_id = {$business_id}");
        return view('home/admin/mini-site/list/projects',$data);
    }

    public function projects_form($id)
    {
        $data['business_id'] = $id;
        $data['form_name'] = 'Add Projects';
        $data['inc_scripts'] = true;

        return view('home/admin/mini-site/form/projects',$data);
    }

    public function insert_projects($id,Request $request)
    {
        extract($this->vars);
        $site_id = $this->get_site_id($id)->id;

        $image_name = $id."-".md5(time()).'.'.$request->image->extension();
        $request->file('image')->move(public_path($project_folder), $image_name);

        $minisite_project = new MiniSiteProject;

        # Collecting Data
        $minisite_project->site_id = $site_id;
        $minisite_project->business_id = $id;
        $minisite_project->title = $request['title'];
        $minisite_project->image = $image_name;
        $minisite_project->detail = $request['detail'];

        $minisite_project->save();

        // $this->upload($request->site_logo,$site_logo_name,$basic_info_folder);
        // $this->upload($request->site_banner,$site_banner_name,$basic_info_folder);

        return redirect()->back()->with('success','Project Added Successfuly');
    }

    public function projects_edit_form($id,$project_id)
    {
        $data['business_id'] = $id;
        $data['form_name'] = 'Edit projects';
        $data['inc_scripts'] = true;

        $project_data = DB::select("SELECT * FROM mini_site_projects WHERE id={$project_id}");
        $data['project_data'] = $project_data[0];

        return view('home/admin/mini-site/form/edit_project',$data);
    }

    public function project_update($business_id,$project_id,Request $request)
    {
        print_r($request->all());
        extract($this->vars);


        $minisite_project = MiniSiteProject::find($project_id);

        # Collecting Data
        $minisite_project->title = $request['title'];
        $minisite_project->detail = $request['detail'];
        // Upload Image
        if($request->image) {
            $image_name = $project_id."-".md5(time()).'.'.$request->image->extension();
            $request->file('image')->move(public_path($project_folder), $image_name);
            $minisite_project->image = $image_name;
        }
        $minisite_project->save();
        return redirect()->back()->with('success','Project Updated Successfuly');
    }

    public function projects_delete($business_id,$project_id)
    {
        MiniSiteProject::find($project_id)->delete();
        return redirect()->back()->with('success','Project Deleted Successfuly');
    }


    //...........................................................................................
    //.PPPPPPPPP.................................................ttt..iiii.......................
    //.PPPPPPPPPP...............................................ottt..iiii.......................
    //.PPPPPPPPPPP..............................................ottt.............................
    //.PPPP...PPPPPPrrrrrr..oooooo..oommmmmmmmmmmm.....oooooo.oootttttiiii...oooooo...nnnnnnnn...
    //.PPPP...PPPPPPrrrrrrroooooooo.oommmmmmmmmmmmm..moooooooooootttttiiii.ioooooooo..nnnnnnnnn..
    //.PPPPPPPPPPPPPrrr...rooo.ooooooommm.mmmmmmmmm..mooo.ooooo.ottt..iiii.iooo.ooooo.nnnn.nnnn..
    //.PPPPPPPPPP.PPrr...rroo...oooooomm..mmmm..mmmmmmoo...oooo.ottt..iiiiiioo...oooo.nnnn..nnn..
    //.PPPPPPPPP..PPrr...rroo...oooooomm..mmmm..mmmmmmoo...oooo.ottt..iiiiiioo...oooo.nnnn..nnn..
    //.PPPP.......PPrr...rroo...oooooomm..mmmm..mmmmmmoo...oooo.ottt..iiiiiioo...oooo.nnnn..nnn..
    //.PPPP.......PPrr...rroo...oooooomm..mmmm..mmmmmmoo...oooo.ottt..iiiiiioo...oooo.nnnn..nnn..
    //.PPPP.......PPrr....rooo.ooooooomm..mmmm..mmmm.mooo.ooooo.ottt..iiii.iooo.ooooo.nnnn..nnn..
    //.PPPP.......PPrr....roooooooo.oomm..mmmm..mmmm.moooooooo..otttttiiii.ioooooooo..nnnn..nnn..
    //.PPPP.......PPrr......oooooo..oomm..mmmm..mmmm...oooooo...otttttiiii...oooooo...nnnn..nnn..
    //...........................................................................................


    public function list_promotion($business_id)
    {
        $data['business_id'] = $business_id;
        $data['page_name'] = 'All promotions';
        $data['inc_scripts'] = true;
        $data['promotions'] = DB::select("SELECT * FROM mini_site_promotions WHERE business_id = {$business_id}");
        return view('home/admin/mini-site/list/promotions',$data);
    }

    public function promotions_form($id)
    {
        $data['business_id'] = $id;
        $data['form_name'] = 'Add Promotions';
        $data['inc_scripts'] = true;
        return view('home/admin/mini-site/form/promotions',$data);
    }

    public function insert_promotions($id,Request $request)
    {
        extract($this->vars);
        $site_id = $this->get_site_id($id)->id;

        $image_name = $id."-".md5(time()).'.'.$request->image->extension();
        $request->file('image')->move(public_path($promotion_folder), $image_name);

        $minisite_project = new MiniSitePromotion;

        # Collecting Data
        $minisite_project->site_id = $site_id;
        $minisite_project->business_id = $id;
        $minisite_project->title = $request['title'];
        $minisite_project->image = $image_name;
        $minisite_project->detail = $request['detail'];

        $minisite_project->save();

        return redirect()->back()->with('success','Project Deleted Successfuly');
    }

    public function promotions_edit_form($id,$promotion_id)
    {
        $data['business_id'] = $id;
        $data['form_name'] = 'Edit promotions';
        $data['inc_scripts'] = true;

        $promotion_data = DB::select("SELECT * FROM mini_site_promotions WHERE id={$promotion_id}");
        $data['promotion_data'] = $promotion_data[0];

        return view('home/admin/mini-site/form/edit_promotion',$data);
    }

    public function promotion_update($business_id,$promotion_id,Request $request)
    {
        print_r($request->all());
        extract($this->vars);


        $minisite_promotion = MiniSitePromotion::find($promotion_id);

        # Collecting Data
        $minisite_promotion->title = $request['title'];
        $minisite_promotion->detail = $request['detail'];
        // Upload Image
        if($request->image) {
            $image_name = $promotion_id."-".md5(time()).'.'.$request->image->extension();
            $request->file('image')->move(public_path($promotion_folder), $image_name);
            $minisite_promotion->image = $image_name;
        }
        $minisite_promotion->save();
        return redirect()->back()->with('success','Promotion Updated Successfuly');
    }

    public function promotions_delete($business_id,$promotion_id)
    {
        MiniSitePromotion::find($promotion_id)->delete();
        return redirect()->back()->with('success','Promotion Deleted Successfuly');
    }



    //................................................................................
    //.PPPPPPPPP...PRRRRRRRRR.....OOOOOOO.....OFFFFFFFFFFFIII.ILLL.......EEEEEEEEEEE..
    //.PPPPPPPPPP..PRRRRRRRRRR...OOOOOOOOOO...OFFFFFFFFFFFIII.ILLL.......EEEEEEEEEEE..
    //.PPPPPPPPPPP.PRRRRRRRRRR..ROOOOOOOOOOO..OFFFFFFFFFFFIII.ILLL.......EEEEEEEEEEE..
    //.PPPP...PPPP.PRRR...RRRRR.ROOOO..OOOOO..OFFF......FFIII.ILLL.......EEEE.........
    //.PPPP...PPPP.PRRR...RRRRRRROOO....OOOOO.OFFF......FFIII.ILLL.......EEEE.........
    //.PPPPPPPPPPP.PRRRRRRRRRR.RROO......OOOO.OFFFFFFFF.FFIII.ILLL.......EEEEEEEEEE...
    //.PPPPPPPPPP..PRRRRRRRRRR.RROO......OOOO.OFFFFFFFF.FFIII.ILLL.......EEEEEEEEEE...
    //.PPPPPPPPP...PRRRRRRR....RROO......OOOO.OFFFFFFFF.FFIII.ILLL.......EEEEEEEEEE...
    //.PPPP........PRRR.RRRR...RROOO....OOOOO.OFFF......FFIII.ILLL.......EEEE.........
    //.PPPP........PRRR..RRRR...ROOOO..OOOOO..OFFF......FFIII.ILLL.......EEEE.........
    //.PPPP........PRRR..RRRRR..ROOOOOOOOOOO..OFFF......FFIII.ILLLLLLLLL.EEEEEEEEEEE..
    //.PPPP........PRRR...RRRRR..OOOOOOOOOO...OFFF......FFIII.ILLLLLLLLL.EEEEEEEEEEE..
    //.PPPP........PRRR....RRRR....OOOOOO.....OFFF......FFIII.ILLLLLLLLL.EEEEEEEEEEE..
    //................................................................................


    public function show_profile($slug)
    {
        $business_id = intval($this->get_buiness_id($slug));
        $business_name = $this->get_buiness_name($business_id);
        if ($business_id == 0) {
            return redirect('/');
        } else {
            $data = $this->genrate_data('all',$business_id);
            $data['business_id'] = $business_id;
            $data['business_slug'] = $slug;
            $data['business_name'] = $business_name;
        }
        return view('home/business/profile',$data);
    }

    public function projects_page($slug)
    {
        $business_id = intval($this->get_buiness_id($slug));
        $business_name = $this->get_buiness_name($business_id);
        $data = $this->genrate_data('projects',$business_id);
        $data['business_id'] = $business_id;
        $data['business_slug'] = $slug;
        $data['business_name'] = $business_name;
        return view('home/business/profile/project',$data);
    }

    public function promotions_page($slug)
    {
        $business_id = intval($this->get_buiness_id($slug));
        $business_name = $this->get_buiness_name($business_id);
        $data = $this->genrate_data('promotions',$business_id);
        $data['business_id'] = $business_id;
        $data['business_slug'] = $slug;
        $data['business_name'] = $business_name;
        return view('home/business/profile/promotion',$data);
    }

    // Helper Functions
    public function get_site_id($id)
    {
        $data = DB::select("SELECT id FROM mini_sites WHERE business_id = {$id}");
        return $data[0];
    }

    public function genrate_data($type,$business_id)
    {
        $data['site_info'] = DB::select("SELECT * FROM mini_sites WHERE business_id = {$business_id}");
        if( $type= 'all' ) {
            $data['over_view'] = DB::select("SELECT * FROM mini_site_overviews WHERE business_id = {$business_id}");
            $data['services'] = DB::select("SELECT * FROM mini_site_services WHERE business_id = {$business_id}");
            $data['projects'] = DB::select("SELECT * FROM mini_site_projects WHERE business_id = {$business_id}");
            $data['promotions'] = DB::select("SELECT * FROM mini_site_promotions WHERE business_id = {$business_id}");
        }

        if( $type= 'projects' ) {
            $data['projects'] = DB::select("SELECT * FROM mini_site_projects WHERE business_id = {$business_id}");
        }

        if( $type= 'promotions' ) {
            $data['promotions'] = DB::select("SELECT * FROM mini_site_promotions WHERE business_id = {$business_id}");
        }

        if( $type= 'services' ) {
            $data['services'] = DB::select("SELECT * FROM mini_site_services WHERE business_id = {$business_id}");
        }

        return $data;
    }

    public function get_buiness_id($slug)
    {
        $data = DB::select("SELECT id FROM businesses WHERE slug = '{$slug}'");
        if (count($data) > 0) {
            $data = $data[0];
            return $data->id;
        } else {
            return 0;
        }

    }

    public function get_buiness_name($id)
    {
        $data = DB::select("SELECT name FROM businesses WHERE id = {$id}");
        if (count($data) > 0) {
            $data = $data[0];
            return $data->name;
        } else {
            return "";
        }

    }
}
