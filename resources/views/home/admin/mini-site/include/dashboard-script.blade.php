<script>
    $('#roles-table').DataTable({
        "language": {
            "emptyTable": "No Roles available!"
        }
    });

    $('#users-table').DataTable({
        "language": {
            "emptyTable": "No Users available!"
        }
    });

    $('#listing-table').DataTable({
        "language": {
            "emptyTable": "No Listings available!"
        },
        columnDefs: [
            { orderable: false, targets: 0 }
        ],
        stateSave: true
    });

    $('#templates-table').DataTable({
        "language": {
            "emptyTable": "No Templates available!"
        }
    });

    $('#data-table').DataTable({
        "language": {
            "emptyTable": "No records available!"
        }
    });

    // Listing Functions
    $(document).ready(function() {
        // Delete
        $('.delete-button').click(function() {
            var return_url = $(this).attr('data-url');
            Swal.fire({
                title: 'Do you want to Delete?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Delete',
                denyButtonText: `Don't Delete`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = return_url;
                }
            })
        })
    })
</script>