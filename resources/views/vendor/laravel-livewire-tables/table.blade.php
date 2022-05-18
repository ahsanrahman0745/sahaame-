<div>
    @if($showmassage)
            <div class="alert alert-success" role="alert">
               {{ $message }}
            </div>
            @endif
    <div class="row justify-content-between">

    <div class="d-flex mb-3">
        <select  wire:model="goal" name="goal" class="form-select fmxw-200" aria-label="Message select example">
            <option selected>Bulk Action</option>
            <option value="verified">Marked Verified</option>
            <option value="unverified">Marked UnVerified</option>
            <option value="active">Activated</option>
            <option value="deactive">Deactived</option>
            <option value="email">send email</option>
            <option value="start0">Start 0</option>
            <option value="start1">Start 1</option>
            <option value="start2">Start 2</option>
            <option value="start3">Start 3 Verified</option>
            <option value="spam">Add to spam</option>
    
      
        </select>
        <button wire:click="balkaction" class="btn btn-sm px-3 btn-secondary ms-3">Apply</button>
    </div>
    
        <div class="table-settings mb-4">
            <div class="row justify-content-between align-items-center">
                <div class="col-9 col-lg-8 d-md-flex">
                    <div class="input-group me-2 me-lg-3 fmxw-300">
                        <span class="input-group-text">
                            <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span> <input type="search" class="form-control" placeholder="{{ __('Search') }}"
                            wire:model="search">

                    </div>

                    {{-- <select class="form-select fmxw-200 d-none d-md-inline" aria-label="Message select example 2">
                        <option selected>All</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                        <option value="3">Pending</option>
                        <option value="3">Cancelled</option>
                    </select> --}}
                </div>
                					
                <div class="col-3 col-lg-4 d-flex justify-content-end">
                
                         <!-- Button Modal -->
                        <button type="button" class="btn btn-sm px-3 btn-secondary ms-3" data-bs-toggle="modal" data-bs-target="#modal-filter">Filter</button>
                        <!-- Modal Content -->
                        <div  wire:ignore.self  class="modal" id="modal-filter" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-filter">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="h6 modal-title">Filters</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                          <label for="">Ranking</label>
                                          <select wire:model.defer="filerrank" wire:change='rankchange($event.target.value)' class="form-control" name="" id="">
                                            <option value="default" >Choose an option</option>
                                             <option value="0">Zero Star</option>
                                            <option value="1">One Star</option>
                                            <option value="2">Two Star</option>
                                            <option value="3">There Star</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="">Category</label>
                                          <select wire:model="pcat" class="form-control" name="" id="">
                                          <option value="default">Choose an option</option>
                                                @foreach($pcategories as $p)
                                   
<option value="{{ $p->id }}">{{ $p->name }}</option>
   @endforeach
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="">Sub Category</label>
                                          <select wire:model="scat" class="form-control" name="" id="">
                                          <option value="default">Choose an option</option>
                                                                         @foreach($subcat as $sub)
<option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                    @endforeach
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-6">  <div class="form-group">
                                          <label for="">country</label>
                                          <select wire:model="fcountry" class="form-control" name="" id="">
                                         
                                            <option value="224">UAE</option>
                                        
                                          </select>
                                        </div>
                                                                                   <div class="form-group">
                                          <label for="">City</label>
                                          <select wire:model="fstate" class="form-control" name="" id="">
                                          <option value="default">Choose an option</option>
                                        @foreach($states as $state)
                                            <option value="{{ $state->state }}">{{ $state->state }}</option>
                                        @endforeach
                                          </select>
                                        </div>
                                             <div class="form-group">
                                          <label for="">Area</label>
                                    
                                          <select wire:model="fcity" class="form-control" name="" id="">
                                          <option value="default">Choose an option</option>
                                                @foreach($cities as $city)
                                                    <option value="{{ $city->city }}">{{ $city->city }}</option>
                                                @endforeach
                                          </select>
                                        </div>
                                      
                                        <div class="form-group">
                                          <label for="">Active Status</label>
                                          <select wire:model="filerstatus" wire:change='statuschange($event.target.value)' class="form-control" name="" id="">
                                          <option value="default">Choose an option</option>
                                            <option  value="1">Activated</option>
                                            <option  value="0">Deactivated</option>
                                            
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button  wire:click="filterbutton"  type="button" class="btn btn-secondary">Apply filter</button>
                                        <button  wire:click="restbutton" type="button" class="btn btn-secondary">Reset filter</button>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Modal Content -->
                    <div class="btn-group">
                        <div class="dropdown me-1">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                                    </path>
                                </svg>
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pb-0">
                                <span class="small ps-3 fw-bold text-dark">Show</span>
                                <a wire:click="perpage(10)" class="dropdown-item d-flex align-items-center fw-bold" href="#">10 <svg
                                        class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></a>
                                <a wire:click="perpage(20)" class="dropdown-item fw-bold" href="#">20</a>
                                <a wire:click="perpage(30)" class="dropdown-item fw-bold rounded-bottom" href="#">30</a>
                            </div>
                        </div>
                        <!-- <div class="dropdown">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
                                <span class="small ps-3 fw-bold text-dark">Show</span>
                                <a class="dropdown-item d-flex align-items-center fw-bold" href="#">10 <svg
                                        class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></a>
                                <a class="dropdown-item fw-bold" href="#">20</a>
                                <a class="dropdown-item fw-bold rounded-bottom" href="#">30</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-auto order-last order-md-first">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                </div>
                <input type="search" class="form-control" placeholder="{{ __('Search') }}" wire:model="search">
            </div>
        </div> -->
        @if($header_view)
        <div class="col-md-auto mb-3">
            @include($header_view)
        </div>
        @endif
    </div>

    <div class="card mb-3">
        @if($models->isEmpty())
        <div class="card-body">
            {{ __('No results to display.') }}
        </div>
        @else
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table {{ $table_class }} mb-0">
                    <thead class="{{ $thead_class }}">
                        <tr>
                          
    @php 
    $i=0;
    @endphp
                            @foreach($columns as $column)
                           @if($i==1)
  @if($checkbox && $checkbox_side == 'left')
                            @include('laravel-livewire-tables::checkbox-all')
                            @endif
                           @endif
                           @php
$i++;
                           @endphp
                            <th class="align-middle text-nowrap border-top-0 {{ $this->thClass($column->attribute) }}">
                                @if($column->sortable)
                                <span style="cursor: pointer;" wire:click="sort('{{ $column->attribute }}')">
                                    {{ $column->heading }}

                                    @if($sort_attribute == $column->attribute)
                                    <i class="fa fa-sort-amount-{{ $sort_direction == 'asc' ? 'up-alt' : 'down' }}"></i>
                                    @else
                                    <i class="fa fa-sort-amount-up-alt" style="opacity: .35;"></i>
                                    @endif
                                </span>
                                @else
                                {{ $column->heading }}
                                @endif
                            </th>
                            @endforeach

                            @if($checkbox && $checkbox_side == 'right')
                            @include('laravel-livewire-tables::checkbox-all')
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($models as $model)
                        <tr class="{{ $this->trClass($model) }}">
                            


    @php 
    $j=0;
    @endphp
                            @foreach($columns as $column)
        @if($j==1)
@if($checkbox && $checkbox_side == 'left')
                            @include('laravel-livewire-tables::checkbox-row')
                            @endif
           @endif        

                                      @php
$j++;
                           @endphp          
                            <td
                                class="align-middle {{ $this->tdClass($column->attribute, $value = Arr::get($model->toArray(), $column->attribute)) }}">
                                @if($column->view)
                                @include($column->view)
                                @else
                                {{ $value }}
                                @endif
                            </td>
                            @endforeach

                            @if($checkbox && $checkbox_side == 'right')
                            @include('laravel-livewire-tables::checkbox-row')
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>

    <div class="row justify-content-between">
        <div class="col-auto">
            {{ $models->links() }}
        </div>
        @if($footer_view)
        <div class="col-md-auto">
            @include($footer_view)
        </div>
        @endif
    </div>
    <script type="text/javascript">
        window.livewire.on('hidemodal', () => {
            $('#modal-filter').modal('hide');
        });
           window.livewire.on('restbutton', () => {
           $('select').prop('selectedIndex',0);
        });
    </script>
</div>