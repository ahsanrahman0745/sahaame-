
<style>
.preview-image-inner img {
    width: 180px;
    /* display : none; */
}
</style>
@include('home/admin/mini-site/include/head')
<body>
   <!-- <livewire-tables:row.user_table>
      </livewire-tables:row.user_table> -->
      @include('home/admin/mini-site/include/dashboard-nav')
   <main class="content">
   @include('home/admin/mini-site/include/dashboard-top-nav')
<div>
   <link rel="stylesheet" href="{{ asset('assets/css/steps_style.css') }}">
   <!-- <link href="{{ asset('assets/css/steps_style.css') }}" rel="stylesheet" type="text/css"> -->
   <link rel="stylesheet" href="{{ asset('assets/css/custom-dashboard.css') }}">
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
      <h2 class="h4">
        Edit image
      </h2>
      <div>
         <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
            <a class="dropdown-item d-flex align-items-center" href="#">
               <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 3a2 2 0 100 4h12a2 #logo-image-field2 0 100-4H4z"></path>
                  <path fill-rule="evenodd"
                     d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                     clip-rule="evenodd"></path>
               </svg>
               Products
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
               <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                  </path>
               </svg>
               Customers
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
               <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                     d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                     clip-rule="evenodd"></path>
               </svg>
               Orders
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
               <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                     d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z"
                     clip-rule="evenodd"></path>
               </svg>
               Console
            </a>
            <div role="separator" class="dropdown-divider my-1"></div>
            <a class="dropdown-item d-flex align-items-center" href="#">
               <svg class="dropdown-icon text-gray-800 me-2" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                  <path fill-rule="evenodd"
                     d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                     clip-rule="evenodd"></path>
               </svg>
               All Reports
            </a>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12 col-xl-12">
         <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">General information</h2>
            <!-- <form wire:submit.prevent="save" action="#" method="POST"> -->
            <form id="msform" method="POST" action="{{url('manage/listing-image/')}}/{{$business->id}}/update-image" enctype="multipart/form-data">
               @csrf
               <input type="hidden" id='listing-id' value="{{$business->id}}">
               <!-- progressbar -->
               <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                     aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               @if(session()->has('success'))
                    <div class="text-success text-center" id='success-message'>{{ session()->get('success') }}</div>
                @endif
               <br> <!-- fieldsets -->
               <fieldset class='form-steps step-1'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Business Image:</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                           <label class="fieldlabels">Business Title / slug :</label>
                           <input type="text" value="{{$business->name}}" class="form-control" name="name" id='business-title'>
                        </div>
                         <div class="row justify-content-center">
                             <div class="col-7 text-center">
                                 <h5 class="purple-text text-center">Clcik save to Update</h5>
                                 <input type="submit" value="Save">
                             </div>
                         </div>
                     </div>
                  </div>
               </fieldset>
            </form>

         </div>
      </div>
   </div>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
   <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
   <script src="{{ asset('assets/js/steps_script.js') }}"></script>
   <script src="{{ asset('assets/js/myyoast.js') }}"></script>
   {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js'></script>
   <script src="{{ asset('assets/js/opentime.js') }}"></script> --}}
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script type="text/javascript">
      // CSRF Token

      (function($) {
          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


          $(document).ready(function() {





              $("#searchcity").autocomplete({
                  source: function(request, response) {
                      // Fetch data
                        console.log('tresd4');
                      $.ajax({
                          url: "{{route('Autocomplte.getAutocompltecity')}}",
                          type: 'post',
                          dataType: "json",
                          data: {
                              _token: CSRF_TOKEN,
                              search: request.term
                          },
                          success: function(data) {
                              response(data);
                          }
                      });
                  },
                  select: function(event, ui) {
                      $('#searchcity').val(ui.item.label);
                      $('#employeeid').val(ui.item.value);
                      return false;
                  }
              });

              $("#stitle_6,#stitle_5,#stitle_4,#stitle_3,#stitle_2,#stitle_1").autocomplete({
                  source: function(request, response) {
                      // Fetch data

                      $.ajax({
                          url: "{{route('Autocomplte.getAutocomplte_services')}}",
                          type: 'post',
                          dataType: "json",
                          data: {
                              _token: CSRF_TOKEN,
                              search: request.term
                          },
                          success: function(data) {
                              response(data);
                          }
                      });
                  },
                  select: function(event, ui) {
                      $(this).val(ui.item.label);
                      $('#employeeid').val(ui.item.value);
                      return false;
                  }
              });

          });

      }(jQuery));
   </script>
    <!-- SEO Preview Script Start -->
    <script>
        $(document).ready(function(){
            $('.meta-title-input').keyup(function(){
                  var meta_title = $(this).val();
                $('.meta-title-input').removeClass('error-border');
                $('.meta-title-error').removeClass('error-color');
                if (meta_title.length < 50) {
                  genrate_seo_link()
                } else {
                    $('.meta-title-input').addClass('error-border');
                    $('.meta-title-error').addClass('error-color');
                }
            });
            $('.meta-description-input').keyup(function(){
                var meta_description = $(this).val();
                $('.meta-description-input').removeClass('error-border');
                    $('.meta-description-error').removeClass('error-color');
                if (meta_description.length < 250) {
                    $('.seo-preview-description').html(meta_description);
                } else {
                    $('.meta-description-input').addClass('error-border');
                    $('.meta-description-error').addClass('error-color');
                }
            });

            // SEO Link Triggers
            $("#sub-categories").change(function() {genrate_seo_link()});
            $("#states_selection").change(function() {genrate_seo_link()});
            $("#stitle_1").change(function() {genrate_seo_link()});
            $("#stitle_2").change(function() {genrate_seo_link()});
            $("#stitle_3").change(function() {genrate_seo_link()});
            $("#stitle_4").change(function() {genrate_seo_link()});
            $("#stitle_5").change(function() {genrate_seo_link()});
            $("#stitle_6").change(function() {genrate_seo_link()});
            genrate_seo_link();
            function genrate_seo_link() {
               var meta_title = $('#meta-title').val();
               var category = $('#sub-categories').val();
               var location = $('#states_selection option:selected').html()
               var serices = "";
               for (var i=1; i<=6; i++) {
                  var current_service = $("#stitle_"+i).val();
                  serices += (current_service != "") ? current_service+"," : '' ;
               }
               serices = serices.slice(0, -1);
               $('.seo-preview-title').html(meta_title+" | Sahaa.me");
               var meta_link = meta_title.toLowerCase();
               meta_link = meta_link.replaceAll(' ', '-')
               console.table({meta_link})
               var seo_link = "https://sahaa.me/business/search?meta="+meta_link+"&category="+category+"&term=&location="+location+"&services="+serices;
               $('#seo-link-a').html(seo_link).attr('href',"https://sahaa.me/business/detail/"+meta_link);
               $('#meta_title_slug').val(meta_link);
               $('#seo_link-input').val(seo_link);
            }
            @if($business->seo_link == "")
               genrate_seo_link();
            @endif
        });
    </script>
   <script>
        //  Move To a Step
        $(document).ready(function() {
         $(document).on('click','.goto-step',function() {
               var element = $(this);
               if (element.hasClass('first-step')) {
                  var business_title = $('#business-title').val();
                  var business_category = $('#categories_dropdown').val();
                  var business_sub_category = $('#sub-categories').val();
                  var email = $('#email-first-field').val();
                  var counter = 0;
                  if (business_title == '') {
                     $('#business-title').addClass('error-border');
                  } else {
                     $('#business-title').removeClass('error-border');
                     counter++;
                  }
                  if (business_category == '') {
                     $('#categories_dropdown').addClass('error-border');
                  } else {
                     $('#categories_dropdown').removeClass('error-border');
                     counter++;
                  }
                  if (business_sub_category == '') {
                     $('#sub-categories').addClass('error-border');
                  } else {
                     $('#sub-categories').removeClass('error-border');
                     counter++;
                  }

                  var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                  if (email == '' || !email.match(email_regex)) {
                     $('#email-first-field').addClass('error-border');
                  } else {
                     $('#email-first-field').removeClass('error-border');
                     $('#email-second-field').val(email);
                     counter++;
                  }

                  if(counter == 4) {
                     var csrf = $('input[name="_token"]').val();
                     var business_id = $('#listing-id').val();
                     $.ajax({
                        url: "{{url('ajax/check_name')}}",
                        type: 'post',
                        dataType: "json",
                        data: {
                           _token: csrf,
                           name: business_title,
                           id : business_id
                        },
                        success: function(data) {
                           if (parseInt(data) == 0) {
                              $('.after-validation').addClass('goto-step');
                              $('#business-title').removeClass('error-border');
                              $('#title-error').hide();
                              var opt_index = parseInt(element.attr('data-index'));
                              var step_class = element.attr('data-class');
                              $('.form-steps').hide();
                              $(step_class).show();
                              add_active_class(opt_index);
                           } else {
                              $('.after-validation').removeClass('goto-step');
                              $('#business-title').addClass('error-border');
                              $('#title-error').show();
                           }
                        }
                     });
                  }

                  console.table({counter})
               } else {
                  var opt_index = parseInt(element.attr('data-index'));
                  var step_class = element.attr('data-class');
                  $('.form-steps').hide();
                  $(step_class).show();
                  add_active_class(opt_index);
               }
            });

            function add_active_class(count) {
                count = count;
                $('.goto-step').removeClass('active');
                for (var i=0; i <= count; i++) {
                    $('.goto-step:eq('+i+')').addClass('active');
                }

                var single_width = 12.5;
                var total_width = (count+1)*(single_width);
                var width_text = total_width+"%";
                $('.progress-bar').css('width',width_text);
            }
        });

        // Change Owner Type
        $(document).ready(function() {
            $('#owner_type').change(function() {
                var owner_type = $(this).val();
                $('.owner_type').html(owner_type);
            });
        });

        $(document).ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $('#categories_dropdown').change(function() {
               var category_id =  $('#categories_dropdown').val();
               var text_value = $('#categories_dropdown option:selected').html();
               $('#parent_category_text').val(text_value);
               $.ajax({
                  url: "{{url('ajax/get/sub-categories')}}/"+category_id,
                  type: 'get',
                  data: {
                     _token: CSRF_TOKEN
                  },
                  success: function(data) {
                     $('#sub-categories').html(data);
                     var text_value = $('#sub-categories option:eq(0)').html();
                  $('#sub_category_text').val(text_value);
                  }
               });
            });
            $('#states_selection').change(function() {
               var state_id =  $('#states_selection').val();
               var text_value = $('#states_selection option:selected').html();
               $('#state_text').val(text_value);
               $.ajax({
                  url: "{{url('ajax/get/areas')}}/"+state_id,
                  type: 'get',
                  data: {
                     _token: CSRF_TOKEN
                  },
                  success: function(data) {
                     $('#area_selection').html(data)
                     var text_value = $('#area_selection option:eq(0)').html();
                     $('#city_text').val(text_value);
                  }
               });
            });

            $('#sub-categories').change(function() {
               var text_value = $('#sub-categories option:selected').html();
               $('#sub_category_text').val(text_value);
            });

            $('#area_selection').change(function() {
               var text_value = $('#area_selection option:selected').html();
               $('#city_text').val(text_value);
            });

            $('#security_question_slug').change(function() {
               var text_value = $('#security_question_slug option:selected').html();
               $('#security_question_text').val(text_value);
            });
        });
   </script>
</div>
<script>
$(document).ready(function() {
   $('#logo-image-field').change(function () {
      var selected_file = $('#logo-image-field').get(0).files[0];
      if(selected_file){
         var render_image = new FileReader();
         render_image.onload = function(){
               $("#logo-preview").attr("src", render_image.result);
               $("#logo-preview").fadeIn();
         }
         render_image.readAsDataURL(selected_file);
      }
   });
   $('#prommotion-image-field').change(function () {
      var selected_file = $('#prommotion-image-field').get(0).files[0];
      if(selected_file){
         var render_image = new FileReader();
         render_image.onload = function(){
               $("#prommotion-preview").attr("src", render_image.result);
               $("#prommotion-preview").fadeIn();
         }
         render_image.readAsDataURL(selected_file);
      }
   });
});
</script>
@if(session()->has('success'))
<script>
   $(document).ready(function() {
      setTimeout(function(){
         $('#success-message').fadeOut();
      }, 5000);
   });
</script>
@endif
@include('home/admin/mini-site/include.footer')
