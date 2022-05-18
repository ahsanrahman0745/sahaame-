<?php

namespace App\Http\Controllers;

use App\Models\businesses;
use App\Models\businessCategory;
use App\Models\keywords;
use Illuminate\Http\Request;
use App\Http\Requests\StorebusinessesRequest;
use App\Http\Requests\UpdatebusinessesRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class BusinessesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_list_business(){
       // return view('dashboard.list_a_business');
        return view('backend.dashboard.new_business');
    }
    
    public function index()
    {
    
                $posts = businesses::orderBy('id', 'DESC')->paginate(8);
      //  $posts= businesses::all();
        return view('backend.listing', ["listings"=>$posts]);
    }
    public function index2(){
     
        $posts = businesses::orderBy('id', 'DESC');
      
        return view('backend.searchbusiness', ["listings"=>$posts,'search'=>'','city'=>'']);
    }
    public function index3(Request $request){
    
  if(isset($_GET['s'])){
    $search = $_GET['s'];
  }else{
   //   echo "else c";
    $search = $request->business_search;
  }

  if(isset($_GET['city'])){
    $city = $_GET['city'];
  }else{
    $city = $request->searchcity;
  }
  $keywords = keywords::where('name',trim($search))->get()->first();
 
  if($keywords!==null){
   
      $posts = businesses::where('rankbykeywords.keyword_id',$keywords->id)->where('active',1)->orderBy('rankbykeywords.rank', 'ASC')->join('rankbykeywords','rankbykeywords.business_id','=','businesses.id')->paginate(8)->appends(['s' =>$search,'city' =>$city]);

  }elseif ($search!='' and $city !='') {
            
            $posts = businesses::where('name', 'like', '%'.$search.'%')
            ->where('city', 'like', '%'.$city.'%')->where('active',1)
            ->orderByRaw('name like ? desc', $search)
            ->orderByRaw('instr(name,?) asc', $search)
            ->orderBy('name')
            ->paginate(8)->appends(['s' =>$search,'city' =>  $city]);
        }elseif($search!=''){
            $posts = businesses::where('name', 'like', '%'.$search.'%')->where('active',1)
            ->orderByRaw('name like ? desc', $search)
            ->orderByRaw('instr(name,?) asc', $search)
            ->orderBy('name')
            ->paginate(8)->appends(['s' =>$search,'city' =>$city]);
        }elseif($city!=''){
            $posts = businesses::where('city', 'like', '%'.$city.'%')->where('active',1)
            ->orderByRaw('city like ? desc', $city)
            ->orderByRaw('instr(city,?) asc', $city)
            ->orderBy('city')
            ->paginate(8)->appends(['s' =>$search,'city' =>$city]);
        }else{
            $posts= businesses::where('active',1)->orderBy('businesses.id', 'DESC')->join('rankbykeywords','rankbykeywords.business_id','=','businesses.id')->paginate(8)->appends(['s' =>$search,'city' =>$city]);
     //  dd($posts->count());
        }
        $businessCategory= businessCategory::all()->toArray();
        $newc=[];
        foreach($businessCategory as $c){
            $newc[$c['id']]=$c;
            $newc2[$c['parent_id']][]=$c;
        }
        $array=[];
        $cat=[];
        $cm=[];
        $pcat=[];
        $b=[];
      foreach($posts as $p){
        $array[]=$p->stitle_1;
        $array[]=$p->stitle_2;
        $array[]=$p->stitle_3;
        $array[]=$p->stitle_4;
        $array[]=$p->stitle_5;
        $array[]=$p->stitle_6;
if(isset($newc[$p->pcategories])){
  
    $pcat[]=$newc[$p->pcategories];
   
}

      }
     foreach($pcat as $p){
        
        if(isset($p['id']) and $p['id']!=0){
            $cat=array_merge($cat,$newc2[$p['id']]);
            
           
        }
     }
     
     // $array = array(12,43,66,21,56,43,43,78,78,100,43,43,43,21);
     $ar = array_replace($array,array_fill_keys(array_keys($array, null),''));

     $v = array_count_values($ar);

    unset($v['']);
  foreach($v as $key=> $t){
    $b[]=$key;
  }
     krsort($b);

     $cm= array_slice($cm, 0, 7);
     $b= array_slice($b, 0, 12);
     $cat= array_slice($cat, 0, 5);
      //  var_dump( ['search'=>$search,'city'=>$city]);
        return view('backend.searchbusiness', ["listings"=>$posts,'search'=>$search,'city'=>$city,'all_cat'=>$newc,'relate_search'=>$cat,'side_cat'=>$b]);
   
    }
    

    public function tables()
    {
        $listings = businesses::all();
        return view('backend.dashboard.listings')->with('listings',$listings);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebusinessesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\businesses  $businesses
     * @return \Illuminate\Http\Response
     */
    public function show(businesses $businesses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\businesses  $businesses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $businesses = businesses::findOrFail($id);
       // $posts = businesses::find($id);
        return view('dashboard.edit_business',['businesses'=>$businesses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebusinessesRequest  $request
     * @param  \App\Models\businesses  $businesses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'Btitle' => 'required',
            'snipshot' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
       // dd($validator);

        if($validator->fails()) {
            return $validator->errors();
          }
       //   $snipshotname = $request->file('snipshot')->getClientOriginalName();
   
          
    
    
         
    

        $businesses = businesses::find($request->input('update_id'));   
        $businesses->name=$request->input('Btitle');

        if($request->file('snipshot')){
            $snipshotpath = $request->file('snipshot')->store('businesslisting', 'public');
            $businesses->snipshot= $snipshotpath;
               }
        $businesses->slug= Str::slug($request->input('Btitle'));
        $businesses->short_desc=$request->input('Sdesc');
        $businesses->description=$request->input('desc');
        $businesses->type_of_bus=$request->input('type_of_bus');
        $businesses->country=$request->input('country');
        $businesses->city=$request->input('city');
        $businesses->address_line_1=$request->input('Address_1');
        $businesses->address_line_2=$request->input('Address_2');
        $businesses->whatsapp=$request->input('whatsapp');
        $businesses->phone=$request->input('phone');
        $businesses->website=$request->input('website');
        $businesses->open_time=$request->input('opentime');
        $businesses->close_time=$request->input('Closetime');
        $businesses->meta_desc=$request->input('meta_desc');
        $businesses->categories=$request->input('categories');
        $businesses->tags=$request->input('tags');
   
        // $businesses->logo=$request->logo->store('app/public');;


        if ($businesses->save()) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\businesses  $businesses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       
        $business = businesses::where('id',$id)->delete();
      //  $business->delete();
         
        return redirect('/dashboard')->with('success','your product has been deleted');
    }
}