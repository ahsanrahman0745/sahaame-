<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\businesses;
use App\Models\locations;
use App\Models\cities;
use App\Models\emailtemplate;
use App\Models\keywords;
use App\Models\rankbykeywords;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Auth;
class apibusinesses extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function saveemailtemplate(Request $request)
    {
        $item = emailtemplate::where(array(
            'id' => 1
        ));
        if ($item !== null)
        {
            $item->update(['subject' => $request->subject, 'body' => $request->body, ]);
        }
        else
        {
            $item = emailtemplate::create(['subject' => $request->subject, 'body' => $request->body, ]);
        }

        return redirect()
            ->back();
    }
    public function index()
    {
        $businesses = businesses::all();
        return response()->json(['status' => 'success', 'data' => $businesses->toArray() ], 200);
    }
    public function addkeyword($name)
    {
        $cr = keywords::where('name', $name)->first();
        if ($cr === null)
        {
            $data = new keywords;
            $data->name = $name;
            $data->save();

            return $data->id;

        }
        else
        {
            // dd($cr);
            return $cr->id;
        }

    }
    public function linkkeyword($kid, $bid)
    {
        $cr = rankbykeywords::where('business_id', $bid)->where('keyword_id', $kid)->first();
        if ($cr === null)
        {

            $data = new rankbykeywords;
            $data->business_id = $bid;
            $data->keyword_id = $kid;
            $data->save();

            return $data->id;
        }
        else
        {
            // dd($cr);
            return $cr->id;
        }

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kyids = [];
        //  dd($request->input('keywords'));
        $validator = Validator::make($request->all() , ['name' => 'required', 'snipshot' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048', 'logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048']);
        // dd($validator);
        if ($validator->fails())
        {
            return $validator->errors();
        }
        //   $snipshotname = $request->file('snipshot')->getClientOriginalName();
        

        $businesses = new businesses();
        if (is_array($request->input('keywords')))
        {

            foreach ($request->input('keywords') as $add)
            {

                if ((int)$add > 0)
                {

                    $kyids[] = $add;
                }
                else
                {

                    $kyids[] = $this->addkeyword($add);
                }
            }
            $businesses->keywords = implode(",", $kyids);
        }
        else
        {

        }

        $businesses->name = $request->input('name');
        if ($request->file('snipshot'))
        {
            $snipshotpath = md5(time()).'.'.$request->snipshot->extension();
            $request->file('snipshot')->move(public_path('business/listings/promotion/'), $snipshotpath);
            // $snipshotpath = $request->file('snipshot')
            //     ->store('businesslisting', 'public');
            $businesses->snipshot = $snipshotpath;
        }
        if ($request->file('logo'))
        {
            $logo = md5(time()).'.'.$request->logo->extension();
            $request->file('logo')->move(public_path('business/listings/logo/'), $logo);
            // $logo = $request->file('logo')
            //     ->store('businesslisting', 'public');
            $businesses->logo = $logo;
        }
        $businesses->slug = Str::slug($request->input('name'));
        $businesses->short_desc = $request->input('short_desc');
        $businesses->author = Auth::user()->id;
        // $businesses->description=$request->input('desc');
        $businesses->pcategories = $request->input('pcategories');
        $businesses->categories = $request->input('categories');

        $businesses->phone = $request->input('phone');
        $businesses->phone_text = $request->input('phone_text');
        $businesses->whatsapp = $request->input('whatsapp');
        $businesses->website = $request->input('website');
        $businesses->email = $request->input('email');

        $businesses->office = $request->input('office');
        $businesses->floor = $request->input('floor');
        $businesses->buildingname = $request->input('buildingname');
        $businesses->streetname = $request->input('streetname');
        $businesses->area = $request->input('area');
        $businesses->country = $request->input('country');

        // $businesses->type_of_bus=$request->input('type_of_bus');
        $businesses->city = $request->input('city');
        $businesses->state = $request->input('state');

        //   $businesses->address_line_1=$request->input('Address_1');
        //     $businesses->address_line_2=$request->input('Address_2');
        $businesses->mon_open_time = $request->input('mon_open_time');
        $businesses->tue_open_time = $request->input('tue_open_time');
        $businesses->wed_open_time = $request->input('wed_open_time');
        $businesses->thu_open_time = $request->input('thu_open_time');
        $businesses->fri_open_time = $request->input('fri_open_time');
        $businesses->sat_open_time = $request->input('sat_open_time');
        $businesses->sun_open_time = $request->input('sun_open_time');

        $businesses->mon_close_time = $request->input('mon_close_time');
        $businesses->tue_close_time = $request->input('tue_close_time');
        $businesses->wed_close_time = $request->input('wed_close_time');
        $businesses->thu_close_time = $request->input('thu_close_time');
        $businesses->fri_close_time = $request->input('fri_close_time');
        $businesses->sat_close_time = $request->input('sat_close_time');
        $businesses->sun_close_time = $request->input('sun_close_time');

        $businesses->stitle_1 = $request->input('stitle_1');
        $businesses->stitle_2 = $request->input('stitle_2');
        $businesses->stitle_3 = $request->input('stitle_3');
        $businesses->stitle_4 = $request->input('stitle_4');
        $businesses->stitle_5 = $request->input('stitle_5');
        $businesses->stitle_6 = $request->input('stitle_6');

        $businesses->meta_desc = $request->input('meta_desc');
        $businesses->meta_keywords = $request->input('meta_keywords');

        $businesses->owner_name = $request->input('owner_name');
        $businesses->owner_phone = $request->input('owner_phone');
        $businesses->owner_email = $request->input('owner_email');

        $businesses->mtitle = $request->input('mtitle');
        $businesses->seo_item_meta_title_format = json_encode($request->input('seo_item_meta_title_format'));

        // $businesses->logo=$request->logo->store('app/public');;
        

        if ($businesses->save())
        {
            if (is_array($kyids))
            {
                foreach ($kyids as $kyid)
                {
                    $this->linkkeyword($kyid, $businesses->id);
                }
            }
            return redirect()
                ->back();
        }
    }

    public function getAutocomplete(Request $request)
    {

        $search = $request->search;
        $city = $request->city;
        if ($search == '')
        {
            $autocomplate = businesses::orderby('name', 'asc')->select('id', 'name')
                ->limit(5)
                ->get();
        }
        elseif ($city != '')
        {
            $autocomplate = businesses::where('name', 'like', '%' . $search . '%')->where('city', 'like', '%' . $city . '%')->orderByRaw('name like ? desc', $search)->orderByRaw('instr(name,?) asc', $search)->orderBy('name')
                ->limit(5)
                ->get();

        }
        else
        {
            $autocomplate = businesses::where('name', 'like', '%' . $search . '%')->orderByRaw('name like ? desc', $search)->orderByRaw('instr(name,?) asc', $search)->orderBy('name')
                ->limit(5)
                ->get();
        }
        $response = array();
        $keywords = keywords::where('name', 'like', '%' . $search . '%')->orderByRaw('name like ? desc', $search)->orderByRaw('instr(name,?) asc', $search)->orderBy('name')
            ->limit(5)
            ->get();
        foreach ($keywords as $keyword)
        {
            $response[] = array(
                "value" => $keyword->id,
                "label" => $keyword->name,
                'type' => 'keyword'
            );
        }

        foreach ($autocomplate as $autocomplate)
        {
            $response[] = array(
                "value" => $autocomplate->id,
                "label" => $autocomplate->name,
                'type' => 'search'
            );
        }

        echo json_encode($response);
        exit;
    }

    public function getAutocompleteserv(Request $request)
    {

        $search = $request->search;

        if ($search == '')
        {
            $autocomplate1 = businesses::orderby('stitle_1', 'asc')->select('stitle_1')
                ->limit(5)
                ->get();
        }
        else
        {
            $autocomplate1 = businesses::select('stitle_1 as title', 'id')->where('stitle_1', 'like', '%' . $search . '%')->limit(5)
                ->get();
            $autocomplate2 = businesses::select('stitle_2 as title', 'id')->where('stitle_2', 'like', '%' . $search . '%')->limit(5)
                ->get();
            $autocomplate3 = businesses::select('stitle_3 as title', 'id')->where('stitle_3', 'like', '%' . $search . '%')->limit(5)
                ->get();
            $autocomplate4 = businesses::select('stitle_4 as title', 'id')->where('stitle_4', 'like', '%' . $search . '%')->limit(5)
                ->get();
            $autocomplate5 = businesses::select('stitle_5 as title', 'id')->where('stitle_5', 'like', '%' . $search . '%')->limit(5)
                ->get();
            $autocomplate6 = businesses::select('stitle_6 as title', 'id')->where('stitle_6', 'like', '%' . $search . '%')->limit(5)
                ->get();
        }

        $response = array();
        foreach ($autocomplate1 as $autocomplate)
        {
            $response[] = array(
                "value" => $autocomplate->title,
                "label" => $autocomplate->title
            );
        }
        foreach ($autocomplate2 as $autocomplate)
        {
            $response[] = array(
                "value" => $autocomplate->title,
                "label" => $autocomplate->title
            );
        }
        foreach ($autocomplate3 as $autocomplate)
        {
            $response[] = array(
                "value" => $autocomplate->title,
                "label" => $autocomplate->title
            );
        }
        foreach ($autocomplate4 as $autocomplate)
        {
            $response[] = array(
                "value" => $autocomplate->title,
                "label" => $autocomplate->title
            );
        }
        foreach ($autocomplate5 as $autocomplate)
        {
            $response[] = array(
                "value" => $autocomplate->title,
                "label" => $autocomplate->title
            );
        }
        foreach ($autocomplate6 as $autocomplate)
        {
            $response[] = array(
                "value" => $autocomplate->title,
                "label" => $autocomplate->title
            );
        }
        $response = array_map("unserialize", array_unique(array_map("serialize", $response)));
        echo json_encode($response);
        exit;
    }

    public function getAutocompletecity(Request $request)
    {

        $search = $request->search;

        if ($search == '')
        {
            $autocomplate = cities::orderby('city', 'asc')->select('city', 'id')
                ->limit(5)
                ->get();
        }
        else
        {
            $autocomplate = cities::select('city', 'id')->orderByRaw('instr(city,?) asc', $search)->where('city', 'like', '%' . $search . '%')->limit(5)
                ->get();
        }

        $response = array();
        foreach ($autocomplate as $autocomplate)
        {
            $response[] = array(
                "value" => $autocomplate->id,
                "label" => $autocomplate->city
            );
        }

        echo json_encode($response);
        exit;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $businesses = businesses::findOrFail($id);
        return response()->json(['status' => 'success', 'data' => $businesses->toArray() ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        request()->validate(['name' => 'required']);
        $kyids = [];
        $businesses = businesses::findOrFail($id);

        if (is_array($request->input('keywords')))
        {

            foreach ($request->input('keywords') as $add)
            {

                if ((int)$add > 0)
                {

                    $kyids[] = $add;
                }
                else
                {

                    $kyids[] = $this->addkeyword($add);
                }
            }

            $businesses->keywords = implode(",", $kyids);
        }
        else
        {

        }
        $businesses->name = $request->input('name');
        if ($request->file('snipshot'))
        {
            $snipshotpath = $request->file('snipshot')
                ->store('businesslisting', 'public');
            $businesses->snipshot = $snipshotpath;
        }
        if ($request->file('logo'))
        {
            $logo = $request->file('logo')
                ->store('businesslisting', 'public');
            $businesses->logo = $logo;
        }
        $businesses->slug = Str::slug($request->input('name'));
        $businesses->short_desc = $request->input('short_desc');
        // $businesses->description=$request->input('desc');
        $businesses->pcategories = $request->input('pcategories');
        $businesses->categories = $request->input('categories');

        $businesses->phone = $request->input('phone');
        $businesses->phone_text = $request->input('phone_text');
        $businesses->whatsapp = $request->input('whatsapp');
        $businesses->website = $request->input('website');
        $businesses->email = $request->input('email');

        $businesses->office = $request->input('office');
        $businesses->floor = $request->input('floor');
        $businesses->buildingname = $request->input('buildingname');
        $businesses->streetname = $request->input('streetname');
        $businesses->area = $request->input('area');
        $businesses->country = $request->input('country');

        // $businesses->type_of_bus=$request->input('type_of_bus');
        $businesses->city = $request->input('city');
        $businesses->state = $request->input('state');

        //   $businesses->address_line_1=$request->input('Address_1');
        //     $businesses->address_line_2=$request->input('Address_2');
        $businesses->mon_open_time = $request->input('mon_open_time');
        $businesses->tue_open_time = $request->input('tue_open_time');
        $businesses->wed_open_time = $request->input('wed_open_time');
        $businesses->thu_open_time = $request->input('thu_open_time');
        $businesses->fri_open_time = $request->input('fri_open_time');
        $businesses->sat_open_time = $request->input('sat_open_time');
        $businesses->sun_open_time = $request->input('sun_open_time');

        $businesses->mon_close_time = $request->input('mon_close_time');
        $businesses->tue_close_time = $request->input('tue_close_time');
        $businesses->wed_close_time = $request->input('wed_close_time');
        $businesses->thu_close_time = $request->input('thu_close_time');
        $businesses->fri_close_time = $request->input('fri_close_time');
        $businesses->sat_close_time = $request->input('sat_close_time');
        $businesses->sun_close_time = $request->input('sun_close_time');

        $businesses->stitle_1 = $request->input('stitle_1');
        $businesses->stitle_2 = $request->input('stitle_2');
        $businesses->stitle_3 = $request->input('stitle_3');
        $businesses->stitle_4 = $request->input('stitle_4');
        $businesses->stitle_5 = $request->input('stitle_5');
        $businesses->stitle_6 = $request->input('stitle_6');

        $businesses->meta_desc = $request->input('meta_desc');
        $businesses->meta_keywords = $request->input('meta_keywords');

        $businesses->owner_name = $request->input('owner_name');
        $businesses->owner_phone = $request->input('owner_phone');
        $businesses->owner_email = $request->input('owner_email');

        $businesses->mtitle = $request->input('mtitle');
        $businesses->seo_item_meta_title_format = json_encode($request->input('seo_item_meta_title_format'));

        if ($businesses->save())
        {
            if (is_array($kyids))
            {
                foreach ($kyids as $kyid)
                {
                    $this->linkkeyword($kyid, $businesses->id);
                }
            }
            return redirect()
                ->back()
                ->with('success', 'Business Listing Updated');
            return response()
                ->json(['status' => 'success', 'data' => $businesses->toArray() ], 200);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $businesses = businesses::findOrFail($id);
        if ($businesses->delete())
        {
            return response()
                ->json(['status' => 'success', 'data' => $businesses->toArray() ], 200);
        }

    }
}

