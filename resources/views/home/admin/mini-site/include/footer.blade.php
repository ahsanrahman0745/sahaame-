                
    <!-- <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
    </footer> -->
</main>
<script src='https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js'></script>
<script>
    $(document).ready(function() {
        $('#business-table').DataTable({
            "language": {
                "emptyTable": "No Listing available!<br><button class='btn-sm btn-primary' id='add-listing-table'>Add Listing</button>"
            }
        });

        $('#add-listing-table').click(function(){
            window.location.href="{{url('addlisting')}}";
        });

        $('#data-table').DataTable({
            "language": {
                "emptyTable": "No records available!"
            }
        });
    });
</script>
@if(isset($inc_scripts))
    @include('home/admin/mini-site/include.mini-site-script')
@endif
</body>
</html>