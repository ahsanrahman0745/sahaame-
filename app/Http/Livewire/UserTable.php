<?php

namespace App\Http\Livewire;
use App\Models\businesses;
use App\Models\businessCategory;
use App\Models\states;
use App\Models\cities;
use App\Models\emailtemplate;
use WithPagination;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class UserTable extends TableComponent
{
    public $table_class = 'table-hover table-striped';
    public $thead_class = 'thead-dark';
    public $header_view = 'backend.mytable.table-header';
    public $checkbox_side = 'left';
    public $message='';
    public $showmassage=false;
    public $per_page = 10;
    public $goal = 10;
    public $emailsubject = '';
    public $emailcontent = '';
    public $filerrank = 'default';
    public $filercat = 'default';
    public $filersubcat = 'default';
    public $filercity = 'default';
    public $filerstate = 'default';
    public $filercountry = 'default';
    public $filerstatus = 'default';
    public $applyfilter = false;
    public $catid = false;
    public $scat = false;
    public $subcat=[];
    public $pcategories;
    public $pcat;
    public $fcity;
    public $cities;
    public $fstate;
    public $states;
    public $state_id;
    public $country;
    public $goalchange="";
    
   // public $footer_view = 'mytable.table-footer';
    public function query()
    {
      if (Auth::user()->role=='sadmin' or Auth::user()->role=='adm') {
      return businesses::query()->select('businesses.*',DB::raw('(CASE WHEN businesses.active =1  THEN "Activated" ELSE "Deactived" END) as status'),'bc.name as categoryname')
      ->join('business_categories as bc','bc.id','=','businesses.categories', 'left outer');
      }else{
         return businesses::query()->select('businesses.*',DB::raw('(CASE WHEN businesses.active =1  THEN "Activated" ELSE "Deactived" END) as status'),'bc.name as categoryname')
         ->join('business_categories as bc','bc.id','=','businesses.categories', 'left outer')->where('author',Auth::user()->id);
      }
      // return businesses::query()->select('businesses.*',DB::raw('(CASE WHEN businesses.active =1  THEN "Activated" ELSE "Deactived" END) as status'),'business_categories.name as categoryname')
      // ->join('business_categories','business_categories.id','=','businesses.categories', 'left outer');
    
    
      //  return businesses::query()->select('ID',DB::raw('(CASE WHEN businesses.active =1  THEN "Activated" ELSE "Deactived" END) as status'),'name','short_desc');
    }
public function perpage($per_page){
    $this->per_page = $per_page;
}
public function rankchange($value){
$this->filerrank=$value;
}
public function catchange($value){
   $this->filercat=$value;


}
public function updatedPcat($value){
   $this->catid=$value;
   $this->subcat=businessCategory::where('parent_id',$value)->get();
  
}
public function updatedScat($value){
   $this->filersubcat=$value;
}

public function subcatchange($value){
   $this->filersubcat=$value;
}
public function updatedFcity($value){
   $this->filercity=$value;
   
}
public function updatedFstate($value){
 //  
   $this->filerstate=$value;
   $state=states::where('country_id',224)->where('state',$this->filerstate)->get()->first();
   $this->state_id=$state->id;
  // dd($this->statesname);
}
public function statuschange($value){
   $this->filerstatus=$value;
}

public function filterbutton(){
    $this->emit('hidemodal');
   $this->applyfilter = true;

}
public function restbutton(){
    $this->emit('hidemodal');
    $this->emit('restbutton');
   $this->applyfilter = false;
   $this->filerrank='default';
   $this->filerstatus='default';
   $this->filersubcat='default';
   $this->filerrank = 'default';
   $this->filercat = 'default';
   $this->filersubcat = 'default';
   $this->filercity = 'default';
   $this->filerstate = 'default';
   $this->filercountry = 'default';
   $this->filerstatus = 'default';
   $this->applyfilter = false;
   $this->catid = false;
   $this->scat = false;
   $this->subcat=[];
   $this->pcategories;
   $this->pcat;
   $this->fcity;
   $this->cities;
   $this->fstate;
   $this->states;
   $this->state_id;
   $this->country;
   $this->goalchange='';
   
}

public function render()
{
   $this->country=224;
   $this->states=states::where('country_id',224)->get();
  
   $this->cities=cities::where('country_id',224)->where('state_id', $this->state_id)->get();
 if($this->state_id>0){
//dd($this->cities);
 }
   $this->pcategories=businessCategory::where('parent_id',0)->get();
  
    return $this->tableView();
}

public function tableView()
{
 
   $model=$this->models()->where(function (Builder $query) {
      if($this->applyfilter){
        
         if ($this->filerrank!='default') {
             $query->where('starts', '=', $this->filerrank);
         }
         if($this->filerstatus!='default'){
            $query->where('active', '=',$this->filerstatus); 
         }
         if($this->filersubcat!='default'){
            $query->where('categories', '=',$this->filersubcat); 
         }
         if($this->filercity!='default'){
            $query->where('city', '=',$this->filercity); 
         }
         if($this->filerstate!='default'){
            $query->where('state', '=',$this->filerstate); 
         }
       
      }
     

   })->paginate($this->per_page);
   
      
      
  
    return view('laravel-livewire-tables::table', [
        'columns' => $this->columns(),
        'models' =>$model,
    ]);
}
public function balkaction()
{
   if (Auth::user()->role=='sadmin' or Auth::user()->role=='adm') {
       $value= $this->goalchange;
       if ($value=='Bulk Action') {
       } elseif ($value=='spam') {
           $businesses= businesses::whereIn('id', $this->checkbox_values)->update(array('spam' =>1));
       } elseif ($value=='active') {
           $businesses= businesses::whereIn('id', $this->checkbox_values)->update(array('active' =>1));
       } elseif ($value=='deactive') {
           $businesses= businesses::whereIn('id', $this->checkbox_values)->update(array('active' =>0));
       } elseif ($value=='unverified') {
           $businesses= businesses::whereIn('id', $this->checkbox_values)->update(array('varified' =>0));
       } elseif ($value=='verified') {
           $businesses= businesses::whereIn('id', $this->checkbox_values)->update(array('varified' =>1));
       } elseif ($value=='email') {
           print_r($this->checkbox_values);
        //    $temail= emailtemplate::get()->first();
        //    if ($temail!==null) {
        //        $this->emailsubject=$temail->subject;
        //        $this->emailcontent=$temail->body;
        //        $businesses= businesses::whereIn('id', $this->checkbox_values)->get();
        //        $e=[];
        //        foreach ($businesses as $b) {
        //            //
        //            if ($b->owner_email!='') {
        //                $e[]=[$b->owner_email,$this->emailsubject,$this->emailcontent];
        //                mail($b->owner_email, $this->emailsubject, $this->emailcontent);
        //            }
        //        }
        //        //  dd($e);
        //    }
       } elseif ($value=='start0') {
           $businesses= businesses::whereIn('id', $this->checkbox_values)->update(array('starts' =>0));
       } elseif ($value=='start1') {
           $businesses= businesses::whereIn('id', $this->checkbox_values)->update(array('starts' =>1));
       } elseif ($value=='start2') {
           $businesses= businesses::whereIn('id', $this->checkbox_values)->update(array('starts' =>2));
       } elseif ($value=='start3') {
           $businesses= businesses::whereIn('id', $this->checkbox_values)->update(array('starts' =>3));
       } elseif ($value=='start4') {
           $businesses= businesses::whereIn('id', $this->checkbox_values)->update(array('starts' =>4));
       } elseif ($value=='start5') {
           $businesses= businesses::whereIn('id', $this->checkbox_values)->update(array('starts' =>5));
       } elseif ($value=='start6') {
           $businesses= businesses::whereIn('id', $this->checkbox_values)->update(array('starts' =>6));
       }
       $this->checkbox_values=[];
       $this->message='Record Updated';
       $this->showmassage=true;
   }
}
public function updatedGoal($value)
{
   $this->goalchange=$value;
    
    
}
    public function columns()
    {
        return [
           Column::make('ID','id')->searchable()->sortable(),
           Column::make('status')->sortable(),
            Column::make('Business name','name')->searchable()->sortable(),
            Column::make('Email ID','email')->searchable()->sortable(),
            Column::make('Sub category','categoryname')->sortable(),
            Column::make('Ranking','starts')->searchable()->sortable(),
            Column::make('Date','created_at')->searchable()->sortable(),
            Column::make('Action')->view('backend.mytable.table-actions'),
        ];
    }
    public function deletelisting($id){
        $businesses= businesses::findOrFail($id);
        if ($businesses->delete()) {
            
        }
    }
    public function deleteChecked()
    {
        businesses::whereIn('id', $this->checkbox_values)->delete();
        $this->checkbox_values=[];
        $this->message='Record Deleted';
        $this->showmassage=true;
    }
    



}