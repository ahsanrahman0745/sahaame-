<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\businesses;
use App\Models\states;
use App\Models\cities;
use App\Models\businessCategory;
use App\Models\keywords;

class Addlisting extends Component
{
    public User $user;
    public $showSavedAlert = false;
    public $showDemoNotification = false;
    public $data, $selected_id;
    public $updateMode = false;
    public $keywords;
    public $goal;
    public $catid;
    public $subcat=[];
    public $pcategories;

    public $fcity;
    public $cities;
    public $fstate;
    public $states;
    public $state_id;
    public $country;
    
    public function rules() {

    return [
        'user.first_name' => 'max:15',
        'user.last_name' => 'max:20',
        'user.email' => 'email',
        'user.gender' => ['required', Rule::in(['Male', 'Female', 'Other'])],
        'user.address' => 'max:40',
        'user.number' => 'numeric',
        'user.city' => 'max:20',
        'user.ZIP' => 'numeric',
    ];
}
public function updatedFstate($value){
    //  
      $this->filerstate=$value;
      $state=states::where('country_id',224)->where('state',$this->filerstate)->get()->first();
      $this->state_id=$state->id;
     // dd($this->statesname);
   }
    public function mount($id=0) { 
        $this->country=224;
        
        $this->states=states::where('country_id',224)->get();
       
        $this->cities=cities::where('country_id',224)->where('state_id', $this->state_id)->get();

        $this->user = auth()->user(); 
       
        $this->keywords=keywords::all();
        $this->pcategories=businessCategory::where('parent_id',0)->get();
        $this->subcat=businessCategory::where('parent_id',1)->get();
        if($id>0){
            $this->updateMode = true;   
            $this->data=businesses::findOrFail($id);
          
            $this->goal=$this->data->pcategories;
            $this->subcat=businessCategory::where('parent_id',$this->data->pcategories)->get();
        }


    }
    public function updatedGoal($value)
    {
        $this->catid=$value;
        $this->subcat=businessCategory::where('parent_id',$value)->get();
    
    }
    public function save()
    {
        if(env('IS_DEMO')) {
            $this->showDemoNotification = true;
        }
        else {
        $this->validate();

        $this->user->save();

        $this->showSavedAlert = true;   
        }
    }
    // public function edit($id)
    // {
    //     $record = businesses::findOrFail($id);
    //     $this->data=$record;
    //     $this->selected_id = $id;
    
    //     $this->updateMode = true;
    // }
    public function render()
    {
       
        return view('backend.livewire.addlisting');
       // return view('backend.livewire.profile',['data'=>$data]);
    }
}