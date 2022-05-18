<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\keywords;
use App\Models\businesses;
use App\Models\rankbykeywords;


class Rankbykeyword extends Component
{
    public $keywordid;
    public $k;
    public $r;
    public $kchoice;
    public $keywords;
    public $addKeyword;
    public $newcat;
    public $showaddnew = false;
    public $search1;
    public function addKeyword(){
        keywords::insertGetId([
                'name'=>$this->addKeyword
                      ]);
                      $this->k=keywords::all();
    }
    public function addTodo($value){
       
        // $product = rankbykeywords::updateOrCreate(
        //     [
        //         'business_id' =>7,
        //         'keyword_id' =>22
        //     ],
        //     [
        //         'business_id' =>(int)$value ,
        //         'keyword_id' =>(int)$this->keywordid
        //     ]
        // );
             $rankbykeywords = rankbykeywords::where('business_id',$value )->where('keyword_id',$this->keywordid)->first();
  
        if (!is_null($rankbykeywords)) {
 
        }else{
         
            $product =  rankbykeywords::insertGetId([
                'business_id' =>(int)$value ,
                'keyword_id' =>(int)$this->keywordid
            
            ]);
            session()->flash('message', 'Listing successfully added.');
        }

      

        // $rankbykeywords = rankbykeywords::where('business_id',$value )->where('keyword_id',$this->keywordid)->first();
  
        // if (!is_null($rankbykeywords)) {
        //     $rankbykeywords->update([
        //         'business_id' =>(int)$value ,
        //         'keyword_id' =>(int)$this->keywordid
        //     ]);
        // }else{
        //     $rankbykeywords = rankbykeywords::create([
        //         'business_id' =>(int)$value ,
        //         'keyword_id' =>(int)$this->keywordid
        //     ]);
        // }
 
    }
    public function removeTodo($value){
        rankbykeywords::where('id',$value)->delete();
        $this->r=keywords::join('rankbykeywords','rankbykeywords.keyword_id','=','keywords.id')
        ->leftjoin('businesses','businesses.id','=','rankbykeywords.business_id')->where('keywords.id',$this->keywordid)->orderBy('rank','asc')->get(['keywords.*','rankbykeywords.*','businesses.name']);
        session()->flash('remove', 'Listing successfully Removed.');
    }
    
    public function selectcat(){
       
            $this->showaddnew = true;
            // $userId = keywords::insertGetId([
            //     'name'=>$this->addKeyword
            //           ]);
            //           $this->k=keywords::all();
     
    }
    public function updatedKchoice($value){
        if($value=='Add new'){
            $this->showaddnew = true;
            // $this->showaddnew = true;
            // $value = keywords::insertGetId([
            //     'name'=>$this->addKeyword
            //           ]);
            //           $this->k=keywords::all();  
        }else{
            $this->showaddnew = false;
            $this->keywordid =$value;
        }
        
     }
     public function updatekeywordOrder($item){
         foreach($item as $i){
            rankbykeywords::find($i['value'])->update(['rank'=>$i['order']]);
         }
         session()->flash('success', 'Rank updated successfully');
     }
    public function mount()
    {   $this->keywords=keywords::all();
        $this->keywordid = keywords::pluck('id')->first();
        $this->r=keywords::join('rankbykeywords','rankbykeywords.keyword_id','=','keywords.id')
        ->leftjoin('businesses','businesses.id','=','rankbykeywords.business_id')->where('keywords.id',$this->keywordid)->orderBy('rank','asc')->get(['keywords.*','rankbykeywords.*','businesses.name']);
    }
    public function render()
    {
        $search1_results = businesses::all();
    	if(strlen($this->search1) > 2){
            $search1_results = businesses::select('id','name')->where('name', 'LIKE', '%' . $this->search1 . '%')->get();
    }
        $k=keywords::all();
        $this->r=keywords::join('rankbykeywords','rankbykeywords.keyword_id','=','keywords.id')
        ->leftjoin('businesses','businesses.id','=','rankbykeywords.business_id')->where('keywords.id',$this->keywordid)->orderBy('rank','asc')->get(['keywords.*','rankbykeywords.*','businesses.name']);
     
        return view('backend.livewire.rankbykeyword',['klist'=>$k,   'search1_results' => $search1_results]);
    }
}