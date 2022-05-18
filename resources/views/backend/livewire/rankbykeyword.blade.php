<div>
    <h1>Rank by Keyword</h1>

    @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    @if (session()->has('remove'))
    <div class="alert alert-danger" role="alert">
   {{ session('remove') }}
</div>
        @endif
        
<div class="row mb-2">
<div class="col-12">
<div class="card border-0 shadow components-section">
            <div class="card-body">  

            <label>Select Category</label>
  <select class="form-control"  wire:model="kchoice">
  @foreach($klist as $k)
  <option value="{{ $k->id }}">{{ $k->name }}</option>
  @endforeach
  <option>Add new</option>
  </select>
  <br>
{{-- <button wire:click='selectcat'>Add New Category</button> --}}
<label style="{{ $showaddnew ? 'display:block' : 'display:none' }}" >Add New Category</label>
  <input class="form-control"  wire:model="addKeyword" type="{{ $showaddnew ? 'text' : 'hidden' }}" >
    <br>
  <button class="btn btn-primary" style="{{ $showaddnew ? 'display:block' : 'display:none' }}" wire:click="addKeyword">Add Category</button>


  
            </div>
            </div>
</div>
</div>
<div class="row">
<div class="col-6">

<div class="card border-0 shadow components-section">
            <div class="card-body">   

    <ul wire:sortable="updatekeywordOrder" class="draggable-list" id="draggable-list">

    @foreach ($r as $keyword)
    
        <li wire:sortable.item="{{ $keyword->id }}" wire:key="keyword-{{ $keyword->id }}">
               <span class="number">{{ $keyword->rank }}</span>
        
      <div  wire:sortable.handle class="draggable" draggable="true">
          <p class="person-name">{{ $keyword->name }}</p>
          <i class="fas fa-grip-lines"></i>
        </div>
           
    <button class="btn btn-danger mr-1" wire:click="removeTodo({{ $keyword->id }})">Remove</button>
        </li>
    @endforeach
</ul>
</div>
</div>
</div>
<div class="col-6">
<div class="card border-0 shadow components-section">
            <div class="card-body">   
   {{-- <label class="fieldlabels">Add new Keyword’s *</label>
                                     {{isset($data->keywords) ? $data->keywords  : '' }} 
                                    @php
                                     $s=[];
                                    if(isset($data->keywords)){
                                $s=explode(",",$data->keywords);
                                    if(!count($s)>0){
                                        $s[0]=$data->keywords;
                                    }
                                    }
                               
                                    @endphp
<select  class="form-control"   id="newcat" wire:model="newcat" wire:change="selectcat($event.target.value)" style="width: 100%;">
                           
                           
               @foreach($keywords as $k)
<option value="{{$k->id}}" {{ (in_array($k->id,$s) ? "selected":"") }}>{{$k->name}}</option>
               @endforeach
              
       
   
  </select> --}}
<div class="input-group input-group-merge search-bar mb-4">
            <span class="input-group-text" id="topbar-addon"><svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
              </svg></span>
            <input type="text" required wire:model="search1"  class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
          </div>

  {{-- <label for="search1">Search listing</label>              
                <input class="form-control"  type="text" 
                class="......" required/> --}}
                @error('search1') <div class="error text-danger">{{$message}}</div> @enderror
                <div class="abolute rounded w-full pl-2">
                <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th class="border-bottom" scope="col">Listing Name</th>
                                <th class="border-bottom" scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                      @foreach($search1_results as $search1_result)
                            <tr>
                                <th class="text-gray-900" scope="row">
                                    {{ $search1_result['name'] }}
                                </th>
                                <td class="fw-bolder text-gray-500">
                                      <button class="btn btn-info" wire:click="addTodo({{  $search1_result['id'] }})">Add</button>
                                </td>
                            
                            </tr>
   @endforeach

  
                   
                            </tbody>
                        </table>
                          
                </div>

</div>
</div>
</div>
</div>
</div>