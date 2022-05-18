{{-- resources/views/cars/table-actions.blade.php --}}
<button class="btn btn-primary" wire:click="deletelisting({{ $model->id }})">Delete</button>
<a class="btn btn-primary" href="/addlisting/{{ $model->id }}/edit">Edit</a>
<a class="btn btn-primary" href="/manage/listing/{{ $model->id }}/view/">View</a>