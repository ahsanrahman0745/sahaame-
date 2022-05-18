@include('home/admin/mini-site/include/head')
<style>
    .table-top-inner {
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
    }
    .table-responsive {
        padding: 10px;
    }
    td {
        vertical-align:middle;
    }

    a {
        text-decoration : none;
    }
</style>
<body class=''>
@csrf
<!-- <livewire-tables:row.user_table>
      </livewire-tables:row.user_table> -->
@include('home/admin/mini-site/include/dashboard-nav')
<main class="content">
    @include('home/admin/mini-site/include/dashboard-top-nav')
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
                    <li class="breadcrumb-item"><a href="#">All Businesses </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Businesses List</li>
                </ol>
            </nav>
            <h2 class="h4">
                Businesses image
            </h2>
        </div>
    </div>
    </div>
    <!-- All Business Start-->
    <div class="row">
        <div class="col-12">
            <div class="card shadow border-0">
                <div class="p-4">
                    <div class="table-top-bar">
                        <div class="table-top-bar-outer">
                            <div class="table-top-inner">
                                <div class="table-top-bar-bulk">
                                    <div class="form-group">
                                        <form action="{{url('manage/listing/list/bulk_action')}}" method='post'>
                                            @csrf
                                            <select id="select-bulk-action" name='action' class='form-control d-inline' style='width: 150px;'>
                                                <option value="" hidden>Select Action</option>
                                                <option value="verified">Mark Verified</option>
                                                <option value="unverified">Mark UnVerified</option>
                                                <option value="active">Active</option>
                                                <option value="deactive">De Active</option>
                                                <option value="send_mail">Send Mail</option>
                                                <option value="start_0">Star 0</option>
                                                <option value="start_1">Star 1</option>
                                                <option value="start_2">Star 2</option>
                                                <option value="start_3">Star 3</option>
                                                <option value="spam">Add to Spam</option>
                                            </select>
                                            <input type="submit" name='bulk_action' value='submit' id='bulk-action-submit' class='d-none'>
                                            <button class='btn btn-success' type='button' id='apply-bulk-action'>Apply</button>
                                            <input type="text" id='selected-ids' name='selected_ids'  class='d-none'>
                                            <input type="text" id='template-id' name='template_id'  class='d-none'>
                                            <input type="hidden" id='send_listing' name='send_listing'>
                                        </form>
                                    </div>
                                </div>
                                @if($permissions->view_all_listings !='')
                                    <div class="table-top-bar-filter">
                                        <div class="table-top-bar-filter-inner">
                                            <button class='btn btn-primary show-filter-modal' data-toggle="modal" data-target='#FilterModal'>Filter</button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            @if(session()->has('success'))
                                <div class="text-success text-center">{{ session()->get('success') }}</div>
                            @endif
                            <div class='text-danger mb-2 text-center' id='bulk-action-error'></div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id='listing-table'>
                            <thead>
                            <tr>
                                <th width='20px'><input type="checkbox" id='check-all'></th>
                                <th width='40px'>ID</th>
                                <th>Business Logo</th>
                                <th>Promotion Banner:</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($businesses AS $business)
                                <tr>
                                    <td><input type='checkbox' class='bulk-action-checkbox' data-id='{{$business->id}}'></td>
                                    <td style='font-size:11px; font-weight:800'>{{$business->id}}</td>
                                    <td style='font-size:11px; font-weight:800'>
                                        <img src="{{asset('business/listings/logo')}}/{{$business->logo}}" style="width:70px; height: 70px; " class='view-listing-image'>
                                    </td>
                                    <td style='font-size:11px; font-weight:800'>
                                        <img src="{{asset('business/listings/promotion')}}/{{$business->snipshot}}"  style="width:70px; height: 70px; " class='view-listing-image'>
                                    </td>
                                    <td style='font-size:11px; font-weight:800'>
                                        @if($permissions->edit_listing !='')
                                            <a href="{{url('manage/listing-image/')}}/{{$business->id}}/edit-image" class='d-block mt-1 text-center text-primary'>Edit</a>
                                        @endif
{{--                                        <a href="{{url('manage/listing/')}}/{{$business->id}}/view" class='d-block mt-1 text-center text-success'>View</a>--}}
                                        @if($permissions->delete_listing !='')
{{--                                            <a href="#" data-url="{{url('manage/listing/')}}/{{$business->id}}/delete" class='d-block mt-1 text-center text-danger delete-button'>Delete</a>--}}
                                        @endif
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

    <!-- Modal -->

    <div class="modal fade" id="EmailTemplates" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Select an Email Template</h5>
                    <button type="button" class="btn btn-danger close-modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p class='text-right'><button class='btn btn-success' id='send_listing_template'>Send Listing Template</button></p>
                        </div>
                        <div class="col-md-12">
                            <div class='text-center text-danger mb-2' id="email-template-error">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class='table table-hover'>
                                    <tbody>
                                    @foreach ($email_templates AS $template)
                                        <tr class='select-template' data-id="{{$template->id}}">
                                            <td>{{$template->id}}</td>
                                            <td>{{$template->subject}}</td>
                                            <td>{{convert_date($template->created_at)}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Modal -->

    <div class="modal fade" id="FilterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Filter Listings</h5>
                    <button type="button" class="btn btn-danger close-modal-filter" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('manage/listing/list/')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label>Email</label>
                                    <input type="email" name='email' class='form-control' placeholder='Enter Email'>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label>Category</label>
                                    <select name="pcategories" id="parent_category" class='form-control'>
                                        <option value="" hidden>Choose option</option>
                                        {{genrate_category_dropdown_selected('parent',(isset($pcategories) ? $pcategories : 0))}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label>Sub Categroy</label>
                                    <select name="categories" id="sub_category" class='form-control'>
                                        <option value="" hidden>Choose option</option>
                                        {{genrate_category_dropdown_selected('sub',(isset($categories) ? $categories : 0))}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label>Role</label>
                                    <select name="role" id="role_dropdown" class='form-control'>
                                        <option value="" hidden>Choose option</option>
                                        {{genrate_roles_dropdown_selected_id((isset($role) ? $role : ''))}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label>User</label>
                                    <select name="author" id="users_dropdown" class='form-control'>
                                        <option value="" hidden>Choose option</option>
                                        {{genrate_users_dropdoen((isset($author) ? $author : ''))}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label>Country</label>
                                    <input type="text"  value='UAE' readonly name='country' class='form-control'>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label>City</label>
                                    <select name="state" id="state_dropdown" class='form-control'>
                                        <option value="" hidden>Choose option</option>
                                        {{genrate_state_dropdown_selected((isset($state) ? $state : ''))}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label>Areas</label>
                                    <select name="city" id="city_dropdown" class='form-control'>
                                        <option value="" hidden>Choose option</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label>Stars</label>
                                    <select name="ranking_stars" id="" class='form-control'>
                                        <option value="" hidden>Choose option</option>
                                        <option value="0">0 Star</option>
                                        <option value="1">1 Star</option>
                                        <option value="2">2 Star</option>
                                        <option value="3">3 Star</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label>Verified</label>
                                    <select name="verified" id="" class='form-control'>
                                        <option value="" hidden>Choose option</option>
                                        <option value="1">Verified</option>
                                        <option value="0">Un Verified</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label>Spam</label>
                                    <select name="spam" id="" class='form-control'>
                                        <option value="" hidden>Choose option</option>
                                        <option value="1">Spamed</option>
                                        <option value="0">Un Spamed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label>Active</label>
                                    <select name="active" id="" class='form-control'>
                                        <option value="" hidden>Choose option</option>
                                        <option value="1">Actve</option>
                                        <option value="0">De-Actve</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class='mt-3'><b>Date Duration</b></label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>From</label>
                                            <input type="date" name='date_from' class='form-control' value="{{isset($date_from) ? $date_from : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>To</label>
                                            <input type="date" name='date_to' class='form-control' value="{{isset($date_to) ? $date_to : '' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{url('manage/listing/list')}}" class='btn btn-danger'>Reset</a>
                        <button class='btn btn-success'>Filter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="dashboard-loading loading-icon">
        <div class="dashboard-loading-outer">
            <div class="dashboard-loading-inner">
                <i class="fa fa-spinner fa-spin"></i>
            </div>
        </div>
    </div>

    <!-- All Business End-->
    @include('home/admin/mini-site/include.footer')
    @include('home/admin/mini-site/include.dashboard-script')
    <script>
        // Bulk Action
        $(document).ready(function() {
            // Check All
            $('#check-all').click(function() {
                var selected_ids = '';
                $('#bulk-action-error').html('');
                if ($('#check-all').prop('checked')) {
                    $('.bulk-action-checkbox').each(function() {
                        var selected_id = $(this).attr('data-id');
                        selected_ids += selected_id+',';
                        $(this).prop('checked',true);
                    });
                    var selected_ids = selected_ids.slice(0, -1);
                    $('#selected-ids').val(selected_ids);
                } else {
                    $('.bulk-action-checkbox').each(function() {
                        $(this).prop('checked',false);
                    });
                    $('#selected-ids').val('');
                }
            });
            // Check Single
            $(document).on('click','.bulk-action-checkbox',function() {
                $('#bulk-action-error').html('');
                $('#check-all').prop('checked',false);
                var selected_ids = '';
                $('.bulk-action-checkbox').each(function() {
                    if($(this).prop('checked')) {
                        var selected_id = $(this).attr('data-id');
                        selected_ids += selected_id+',';
                    }
                });
                var selected_ids = selected_ids.slice(0, -1);
                $('#selected-ids').val(selected_ids);
            });
            // Verify Selection
            $('#select-bulk-action').change(function() {
                $('#select-bulk-action').removeClass('error-border');
            });

            // Proccess Bulk Action
            $('#apply-bulk-action').click(function() {
                var CSRF_TOKEN = $('input[name="_token"]').val();
                var bulk_actoin = $('#select-bulk-action').val();
                var bulk_ids = $('#selected-ids').val();

                if (bulk_actoin != "") {
                    if (bulk_ids != "") {
                        if (bulk_actoin == "send_mail") {

                            var email_template_id = $('#template-id').val();
                            if (email_template_id != "") {
                                $('body').addClass('show-loading');
                                $('.loading-icon').css('display','flex');
                                $('#bulk-action-submit').trigger('click');
                            } else {
                                $('#EmailTemplates').modal('show');
                                $("#sen_listing").val("");
                            }

                        } else {
                            $('body').addClass('show-loading');
                            $('.loading-icon').css('display','flex');
                            $('#bulk-action-submit').trigger('click');
                        }
                    } else {
                        $('#bulk-action-error').html('Please Select some rows below');
                    }
                } else {
                    $('#select-bulk-action').addClass('error-border');
                }

            });

            $('#send_listing_template').click(function() {
                $("#send_listing").val("true");
                $('#EmailTemplates').modal('hide');
                $('body').addClass('show-loading');
                $('.loading-icon').css('display','flex');
                $('#bulk-action-submit').trigger('click');
            });

            // Close Modal
            $('.close-modal').click(function() {
                $('#EmailTemplates').modal('hide');
            });


            //===Filter Modal===//
            // $("#FilterModal").modal('show');
            // Hide Modal
            $('.close-modal-filter').click(function() {
                $("#FilterModal").modal('hide');
            });
            // Show Modal
            $('.show-filter-modal').click(function() {
                $("#FilterModal").modal('show');
            });

            // Email Template Selection
            $('.select-template').click(function() {
                var template_id = $(this).attr('data-id');
                $('#template-id').val(template_id);
                $('#EmailTemplates').modal('hide');
                $('.loading-icon').css('display','flex');
                $('body').addClass('show-loading');
                $('#bulk-action-submit').trigger('click');
            });
        });

        $(document).ready(function() {
            var CSRF_TOKEN = $('input[name="_token"]').val();
            $('#parent_category').change(function() {
                var category_id =  $('#parent_category').val();
                $.ajax({
                    url: "{{url('ajax/get/sub-categories')}}/"+category_id,
                    type: 'get',
                    data: {
                        _token: CSRF_TOKEN
                    },
                    success: function(data) {
                        $('#sub_category').html(data);
                    }
                });
            });
            $('#state_dropdown').change(function() {
                var state_id =  $('#state_dropdown').val();
                $.ajax({
                    url: "{{url('ajax/get/areas')}}/"+state_id,
                    type: 'get',
                    data: {
                        _token: CSRF_TOKEN
                    },
                    success: function(data) {
                        $('#city_dropdown').html(data)
                    }
                });
            });

            $('#role_dropdown').change(function() {
                var role_id =  $('#role_dropdown').val();
                $.ajax({
                    url: "{{url('ajax/get/users')}}/"+role_id,
                    type: 'get',
                    data: {
                        _token: CSRF_TOKEN
                    },
                    success: function(data) {
                        $('#users_dropdown').html(data)
                    }
                });
            });
        });

    </script>
