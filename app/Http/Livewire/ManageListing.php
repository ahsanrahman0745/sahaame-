<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\businesses;
use Livewire\WithPagination;

class ManageListing extends Component
{

    use WithPagination;
    public User $user;
    public businesses $listings;
    public $showSavedAlert = false;
    public $showDemoNotification = false;
    public $table_class = 'table-hover table-striped';
  //  public $data;

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

    public function mount() { $this->user = auth()->user(); }

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
    public function edit($id)
    {
        $record = businesses::findOrFail($id);
        $this->data=$record;
        $this->selected_id = $id;
    
        $this->updateMode = true;
    }
    
    public function render()
    {   
        
        //$this->data = Listing::simplePaginate(2);
        //dd($this->listing);
       // $listings =Listing::all();
        return view('backend.livewire.manage-listing',['data'=>businesses::orderBy('id', 'desc')->get()]);
    }
}