<div>
    <h1>Rank by Keyword</h1>

    @if(session()->has('success'))
  <div>
    {{ session()->get('success') }}
  </div>
@endif
  <select wire:model="kchoice">
  @foreach($klist as $k)
  <option value="{{ $k->id }}">{{ $k->name }}</option>
  @endforeach
  </select>
  <br>
  <br>
  <br>
    <ul wire:sortable="updatekeywordOrder" class="draggable-list" id="draggable-list">
 
    @foreach ($r as $keyword)
        <li wire:sortable.item="{{ $keyword->id }}" wire:key="keyword-{{ $keyword->id }}">
               <span class="number">{{ $keyword->rank }}</span>
        
      <div  wire:sortable.handle class="draggable" draggable="true">
          <p class="person-name">{{ $keyword->name }}</p>
          <i class="fas fa-grip-lines"></i>
        </div>
           
    
        </li>
    @endforeach
</ul>
</div>
