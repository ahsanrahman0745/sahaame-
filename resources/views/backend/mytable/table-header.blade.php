{{-- resources/views/users/table-header.blade.php --}}

<a href="{{url('manage/listing/add-form')}}" class="btn btn-primary">New Listing</a>

<button class="btn btn-danger" onclick="confirm('Are you sure?') || event.stopImmediatePropagation();" wire:click="deleteChecked">
    Delete Checked
</button>