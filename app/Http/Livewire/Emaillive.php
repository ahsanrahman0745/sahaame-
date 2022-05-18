<?php

namespace App\Http\Livewire;
use App\Models\emailtemplate;
use Livewire\Component;

class Emaillive extends Component
{
  
    public $emailsubject;
    public $emailbody;
    public function mount(){
        $email= emailtemplate::get()->first();
      
        if(isset($email->subject) and isset($email->body)){
            $this->emailsubject=$email->subject;
            $this->emailbody=$email->body; 
        }
    }
    public function render()
    {
    
 
        return view('backend.livewire.emailtemplate');
    }
}