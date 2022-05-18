<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #ffffff;
    }
    h1{
        margin-bottom: 15px;
        font-size: 1.6em;
        color: #e87503;
        text-align: center;
    }
    #regForm {
        background: #f9f9f9;
        padding: 50px;
        border-radius: 3px;
        border: 1px solid #ccc;
        margin: 100px auto;
        font-family: Raleway;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #e87503;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #e87503;
    }
    .schedual-call-logo-outer img {
        width: 200px;
        margin: auto;
        display: block;
        margin-bottom: 50px;
    }
    @media only screen and (max-width: 480px){
        h1 {
            font-size: 15px;
        }

        label {
            display: inline-block;
            margin-bottom: .5rem;
            font-size: 13px;
        }

        button {
            width: 100%;
            margin: 5px 0;
        }

        .schedual-call-logo-outer img {
                width: 140px;
                margin: auto;
                display: block;
                margin-bottom: 50px;
            }

            #regForm {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 3px;
    border: 1px solid #ccc;
    margin: 100px auto;
    font-family: Raleway;
    width: 90%;
    min-width: 300px;
}
    }
</style>
<body>
<div class="schedual-call-logo pt-5">
    <div class="schedual-call-logo-outer">
        <a href="https://sahaa.me"><img src="https://sahaa.me/business/assets/images/logo/logo.png" alt=""></a>
    </div>
</div>
@if(session()->has('success'))
    <div class="text-success text-center" id='success-message'>{{ session()->get('success') }}</div>
@endif
<form id="regForm" class="mt-0" action="{{url('add-yours')}}" method='post' enctype="multipart/form-data">
    @csrf
    <!-- One "tab" for each step in the form: -->
    <div class="tab tab-validate">
        <h1>Business Owner Details:</h1>
        <div class="schedual-call-form-box-main">
            <div class="schedual-call-form-box-fields">
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label for="">Who are you?</label>
                        <select name="owner_type" class='form-control' required="">
                            <option value="" hidden>Choose Option</option>
                            <option value="Owner">Owner</option>
                            <option value="Manager">Manager</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name </label>
                        <input type="text" class="form-control" name="owner_name" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Email Address </label>
                        <input type="email" class="form-control" name="owner_email" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Phone Number </label>
                        <input type="text" class="form-control" name="owner_phone" required="" autofill="off">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab tab-validate">
        <h1>Business Details:</h1>
        <div class="schedual-call-form-box-main">
            <div class="schedual-call-form-box-fields">
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business Name </label>
                        <input type="text" class="form-control" name="business_title" required="" autofill="off">
                    </div>
                </div>
                <!-- <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business Type </label>
                        <input type="text" class="form-control" name="business_type" required="" autofill="off">
                    </div>
                </div> -->
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Category </label>
                        <select class="form-control"  name="business_category"  id='categories_dropdown'>
                              <option value="" hidden>Select Category</option>
                              {{genrate_category_dropdown("parent")}}
                           </select>
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Sub Category </label>
                        <select class="form-control"  name="business_sub_category" id='sub-categories'>
                            <option value="" hidden>Select Sub Category</option>
                            {{genrate_category_dropdown("sub")}}
                        </select>
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business Year of Establishment </label>
                        <input type="text" class="form-control" name="business_year" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business Logo </label>
                        <input type="file" class="form-control" name="business_logo" required="" autofill="off"accept="application/png" />
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business Profile </label>
                        <input type="file" class="form-control" name="business_profile" required="" autofill="off"accept="application/pdf" />
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business Portfolio </label>
                        <input type="file" class="form-control" name="business_portfolio" required="" autofill="off"accept="application/pdf" />
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business cooperative Video </label>
                        <input type="file" class="form-control" name="business_video" required="" autofill="off" />
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Define your Business</label>
                        <textarea name="business_detail" id="" class="form-control" cols="5" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab valid">
        <h1>Business Services:</h1>
        <div class="schedual-call-form-box-main">
            <div class="schedual-call-form-box-fields-test">
                <div class="schedual-call-form-box-field-test">
                    <div class="form-group">
                        <label>Service 01 </label>
                        <input type="text" data-valid='true' class="valid form-control" name="service_01" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field-test">
                    <div class="form-group">
                        <label>Service 02 </label>
                        <input type="text" data-valid='true' class="valid form-control" name="service_02" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field-test">
                    <div class="form-group">
                        <label>Service 03 </label>
                        <input type="text" data-valid='true' class="valid form-control" name="service_03" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field-test">
                    <div class="form-group">
                        <label>Service 04 </label>
                        <input type="text" data-valid='true' class="valid form-control" name="service_04" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field-test">
                    <div class="form-group">
                        <label>Service 05 </label>
                        <input type="text" data-valid='true' class="valid form-control" name="service_05" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field-test">
                    <div class="form-group">
                        <label>Service 06 </label>
                        <input type="text" data-valid='true' class="valid form-control" name="service_06" autofill="off">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab tab-validate">
        <h1>Business Address:</h1>
        <div class="schedual-call-form-box-main">
            <div class="schedual-call-form-box-fields">
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Office # </label>
                        <input type="text" class="form-control" name="office" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Floor # </label>
                        <input type="email" class="form-control" name="floor" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Building name:</label>
                        <input type="text" class="form-control" name="building_name" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Street Name</label>
                        <input type="text" class="form-control" name="street_name" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>City</label>
                        <select class='form-control' name="city" id="states_selection">
                            <option value="" hidden>Select City</option>
                            {{genrate_state_dropdown()}}
                        </select>
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Area</label>
                        <select class='form-control' name="area" id="area_selection">
                            <option value="" hidden>Select Area</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab tab-validate">
        <h1>Business Contact Details:</h1>
        <div class="schedual-call-form-box-main">
            <div class="schedual-call-form-box-fields">
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business Phone Number </label>
                        <input type="text" class="form-control" name="business_phone" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="business_email" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Whatsapp </label>
                        <input type="text" class="form-control" name="business_whatsapp" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Messenger</label>
                        <input type="text" class="form-control" name="business_messenger" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Facebook Page link</label>
                        <input type="url" class="form-control" name="facebook_page" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Google Map Location Link</label>
                        <input type="text" class="form-control" name="business_location" required="" autofill="off">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="tab tab-validate">
        <h1>Business Timings:</h1>
        <div class="schedual-call-form-box-main">
            <div class="row mt-2">
                <div class="col-4">
                    <label>Day</label>
                </div>
                <div class="col-4">
                    Open at
                </div>
                <div class="col-4">
                    Close at
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label>Monday</label>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='monday_open'>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='monday_close'>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label>Tuesday</label>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='tuesday_open'>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='tuesday_close'>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label>Wednesday</label>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='wednesday_open'>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='wednesday_close'>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label>Thursday</label>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='thurday_open'>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='thurday_close'>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label>Frieday</label>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='frieday_open'>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='frieday_close'>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label>Saturday</label>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='saturday_open'>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='saturday_close'>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label>Sunday</label>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='sunday_open'>
                </div>
                <div class="col-4">
                    <input type="time" class='form-control' name='sunday_close'>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="tab tab-validate">
        <h1>Branding:</h1>
        <div class="schedual-call-form-box-main">
            <div class="schedual-call-form-box-fields">
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business website</label>
                        <input type="text" class="form-control" name="name" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business corporate video </label>
                        <input type="email" class="form-control" name="email" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business profile </label>
                        <input type="text" class="form-control" name="text" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business Logo </label>
                        <input type="text" class="form-control" name="text" required="" autofill="off">
                    </div>
                </div>
                <div class="schedual-call-form-box-field">
                    <div class="form-group">
                        <label>Business Portfolio </label>
                        <input type="text" class="form-control" name="text" required="" autofill="off">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div style="overflow:auto; margin-top:10px">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="preview" onclick="preveiew()" style='display:none'>Preview</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <!-- <span class="step"></span> -->
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
            document.getElementById("preview").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
            
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            document.getElementById("preview").style.display = "inline";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
            document.getElementById("preview").style.display = "none";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function preveiew() {
        $(".tab").show();
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // // A loop that checks every input field in the current tab:
        // for (i = 0; i < y.length; i++) {
        //     // If a field is empty...
        //     if (y[i].getAttribute('data-valid') == null) {
        //         if (y[i].value == "") {
        //             // add an "invalid" class to the field:
        //             y[i].className += " invalid";
        //             // and set the current valid status to false
        //             valid = false;
        //         }
        //     }
        // }

        // console.log(x);

        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }

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

</body>
</html>
