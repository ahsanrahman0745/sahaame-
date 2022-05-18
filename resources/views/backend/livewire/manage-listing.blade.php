<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Business Listing </a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Listing</li>
            </ol>
        </nav>
        <h2 class="h4">Manage Listing</h2>
    </div>
    <!-- <div class="btn-toolbar mb-2 mb-md-0">
        <a href="/addlisting" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            New Listing
        </a>

    </div> -->
</div>

<!-- <div class="alert alert-danger" role="alert">
    Add, Edit, Delete features are not functional. This is a PRO feature! Click <a href="#" target="_blank">here</a> to
    see the PRO product.
</div> -->


    <!-- <table class="table user-table table-hover align-items-center">
        <thead>
            <tr>
                <th class="border-bottom">
                    <div class="form-check dashboard-check">
                        <input class="form-check-input" type="checkbox" value="" id="userCheck55">
                        <label class="form-check-label" for="userCheck55">
                        </label>
                    </div>
                </th>
                <th class="border-bottom">Name</th>
                <th class="border-bottom">Role</th>
                <th class="border-bottom">Date Created</th>
                <th class="border-bottom">Status</th>
                <th class="border-bottom">Action</th>
            </tr>
        </thead>
        <tbody>


            @foreach ( $data as $lists )


            <tr>
                <td>
                    <div class="form-check dashboard-check">
                        <input class="form-check-input" type="checkbox" value="" id="userCheck1">
                        <label class="form-check-label" for="userCheck1">
                        </label>
                    </div>
                </td>
                <td>
                    <a href="#" class="d-flex align-items-center">

                        @if($lists->snipshot))


                        <img src="storage/{{$lists->snipshot}}" class="avatar rounded-circle me-3" alt="Avatar">
                        @else
                        <img src="../assets/img/team/profile-picture-1.jpg" class="avatar rounded-circle me-3"
                            alt="Avatar">
                        @endif

                        <div class="d-block">
                            <span class="fw-bold">{{ $lists->name; }}</span>
                            <div class="small text-gray">{{ $lists->email; }}</div>
                        </div>
                    </a>
                </td>
                <td><span class="fw-normal">{{ $lists->name; }}

                      

    </span></td>
    <td><span class="fw-normal d-flex align-items-center">15 Jun 2021</span></td>
    <td><span class="fw-normal text-success">Active</span></td>
    <td>
        <div class="btn-group">
            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                    </path>
                </svg>
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                <a href="{{ route('editlisting',$lists->id) }}" class="dropdown-item d-flex align-items-center"
                    href="#">
                    <span class="fas fa-user-shield me-2"></span>
                    Edit Details
                </a>

                <a href="{{ route('deletelisting',$lists->id) }}"
                    class="dropdown-item text-danger d-flex align-items-center" href="#">
                    <span class="fas fa-user-times me-2"></span>
                    Delete user
                </a>
            </div>
        </div>
    </td>
    </tr>

    @endforeach
    </tbody>
    </table> -->

    @livewire('user-table')

</div>
<script>
    function change_date_type() {
        $('table tbody tr').each(function() {
           var date_text = $(this).find('td:eq(7)').html();
           date_text = date_text.replace('\n','');
           date_text = date_text.replace('\n','');
           date_text = date_text.replace(' ','');
           var new_date = date_text.split('T');
           console.log(new_date);
           $(this).find('td:eq(7)').html(new_date[0]);
        });
    }

    $(document).ready(function() {
        change_date_type();
    })
</script>
<script>
document.addEventListener('livewire:load', function () {
    change_date_type();

    document.addEventListener('livewire:update', function () {
        change_date_type();
    })
})
</script>