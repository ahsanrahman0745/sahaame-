<?php

namespace App\Http\Livewire;

use App\Models\businesses;
use App\Models\businessCategory;
use App\Models\Expense;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class Dashboard extends Component
{
    public $types = ['test','food', 'shopping', 'entertainment', 'travel', 'other'];

    public $colors = [
        'food' => '#f6ad55',
        'shopping' => '#fc8181',
        'entertainment' => '#90cdf4',
        'travel' => '#66DA26',
        'other' => '#cbd5e0',
        'test'=>'#000'
    ];

    public $firstRun = true;

    public $showDataLabels = false;

    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
    ];

    public function handleOnPointClick($point)
    {
        dd($point);
    }

    public function handleOnSliceClick($slice)
    {
        dd($slice);
    }

    public function handleOnColumnClick($column)
    {
        dd($column);
    }
    public function render()
    {
        for ($i=0 ;$i<=7; $i++) {
            $week_array[] = date('Y-m-d', strtotime("- {$i} day"));
        }
        
        $week_array;
        // $columnChartModel = businesses::groupBy('date')
        // ->orderBy('date', 'DESC')
        // ->get(array(
        //     DB::raw('Date(created_at) as date'),
        //     DB::raw('COUNT(*) as "views"')
        // ))->
        
        $columnChartModel = businesses::orderBy('created_at')->get();
        

        $columnChartModel =  $columnChartModel->groupBy(function ($date) {

        // NEED SOMTHING THAT SET NEW FORMAT
            // if(isset($this->newGroupBy)){
            //     $this->grouped = $this->newGroupBy;
            // }else{
            //     $this->grouped;
            // }
       

            return Carbon::parse($date->created_at)->format('Y-m-d');
        })->reduce(
            function ($columnChartModel, $data) {
      
            $type = Carbon::parse($data->first()->created_at)->format('D d/m/y');
            $value = $data->count();


            return $columnChartModel->addColumn($type, $value, '#000');
        },
            LivewireCharts::columnChartModel()
                ->setTitle('Listing By Date')
                ->setAnimated($this->firstRun)
                ->withOnColumnClickEventName('onColumnClick')
                ->setLegendVisibility(false)
                ->setDataLabelsEnabled($this->showDataLabels)
                //->setOpacity(0.25)
                ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
                ->setColumnWidth(10)
                ->withGrid()
        );


 
$list_cat=[];
        $this->firstRun = false;

        $cat_array=businessCategory::where("parent_id",0)->get();
        foreach($cat_array as $cat){
            $list_sub=[];   
            $cat_sub=businessCategory::where("parent_id",$cat->id)->get();
            $main_count=0;
           if($cat_sub->count()){
               foreach ($cat_sub as $sub) {
                   if (isset($sub->id)) {
                   $cts= businesses::where("categories",$sub->id)->get()->count();
                       $list_sub[]=['id'=>$sub->id,'name'=>$sub->name,'count'=>$cts];
                       $main_count+=$cts;
                   }
                   
               }
           }else{
          
           }
         

            $list_cat[]=['id'=>$cat->id,'name'=>$cat->name,'child'=> $list_sub,'count'=>$main_count];

        }
        return view('backend.dashboard')
            ->with([
                'columnChartModel' => $columnChartModel,
                'cat_array' =>$list_cat
            
            
            ]);
    }
}