{{-- resources/views/users/table-header.blade.php --}}

<a href="/addlisting" class="btn btn-primary">New Listing</a>

<button class="btn btn-danger" onclick="confirm('Are you sure?') || event.stopImmediatePropagation();" wire:click="deleteChecked">
    Delete Checked
</button>