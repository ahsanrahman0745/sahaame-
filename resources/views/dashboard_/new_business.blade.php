@extends('dashboard.index')
@section('content')
<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css'> -->
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="{{ asset('assets/css/steps_style.css') }}">
<link href="{{ asset('assets/css/steps_style.css') }}" rel="stylesheet" type="text/css">
<div class="container ">
    <!-- partial:index.partial.html -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-12 col-lg-12 col-xl-12 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pb-0 mt-3 mb-3">
                    <h2 id="heading"> Add a Business</h2>
                    <p>Fill all form field to go to next step</p>
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Business Details</strong></li>
                            <li id="personal"><strong>Business Contact Details </strong></li>
                            <li id="payment"><strong>Business Address</strong></li>
                            <li id="payment"><strong>Opening Hours</strong></li>
                            <li id="payment"><strong>Services</strong></li>
                            <li id="payment"><strong>Keyword’s Ranking</strong></li>
                            <li id="payment"><strong>SEO</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Business Details:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 8</h2>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Business Name: *</label>
                                        <input type="text" class="form-control" name="Btitle">

                                        <label class="fieldlabels">Business Slogan:</label>
                                        <input type="text" class="form-control" name="Sdesc">

                                        <label class="fieldlabels">Category :</label>
                                        <input type="text" class="form-control" name="Sdesc">


                                        <label class="fieldlabels">Sub-Category :</label>
                                        <input type="text" class="form-control" name="Sdesc">



                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Business Logo :</label>
                                        <input type="file" name="pic" accept="image/*">

                                        <label class="fieldlabels">Promotion Banner :</label>
                                        <input type="file" name="pic" accept="image/*">
                                    </div>




                                </div>
                            </div>

                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Business Contact Details:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 8</h2>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Call US: *</label>
                                        <input type="text" class="form-control" name="Btitle">

                                        <label class="fieldlabels">Whatsapp US:</label>
                                        <input type="text" class="form-control" name="Sdesc">


                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Messenger us:</label>
                                        <input type="text" class="form-control" name="Sdesc">


                                        <label class="fieldlabels">Email Us:</label>
                                        <input type="text" class="form-control" name="Sdesc">
                                    </div>

                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Business Address:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 8</h2>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Office #: *</label>
                                        <input type="text" class="form-control" name="Btitle">

                                        <label class="fieldlabels">Floor :</label>
                                        <input type="text" class="form-control" name="Sdesc">
                                        <label class="fieldlabels">Building name:</label>
                                        <input type="text" class="form-control" name="Sdesc">


                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Street name:</label>
                                        <input type="text" class="form-control" name="Sdesc">


                                        <label class="fieldlabels">Area:</label>
                                        <input type="text" class="form-control" name="Sdesc">
                                        <label class="fieldlabels">Country :</label>
                                        <input type="text" class="form-control" name="Sdesc">
                                    </div>

                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Opening Hours:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 8</h2>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <!--/ start modal open huors/-->
                                        <div id="edit-hours">
                                            <div class="modal-content1">

                                                <div class="row day-week" data-day="Monday">
                                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                                        <p>Monday</p>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <!-- Switch -->

                                                        <label class="switch">
                                                            <input type="checkbox" name="open-day" class="open-day"
                                                                value="Monday">
                                                            <span class="slider round"></span>
                                                        </label>

                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <p class="day-closed">Closed</p>
                                                        <p class="day-opened" style="display: none">Opened</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                                        <div class="row inner-ft-row">
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                                                style="display: none">
                                                                <p class="center"><span>-</span></p>
                                                            </div>
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                                                style="display: none">
                                                                <div><span class="agg-orari cursor-p">ADD
                                                                        TIMES</span><span
                                                                        class="material-icons cursor-p del-orari">clear</span>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row day-week" data-day="Tuesday">
                                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                                        <p>Tuesday</p>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <!-- Switch -->
                                                        <label class="switch">
                                                            <input type="checkbox" name="open-day" class="open-day"
                                                                value="Tuesday">
                                                            <span class="slider round"></span>
                                                        </label>

                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <p class="day-closed">Closed</p>
                                                        <p class="day-opened" style="display: none">Opened</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                                        <div class="row inner-ft-row">
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                                                style="display: none">
                                                                <p class="center"><span>-</span></p>
                                                            </div>
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                                                style="display: none">
                                                                <div><span class="agg-orari cursor-p">ADD
                                                                        TIMES</span><span
                                                                        class="material-icons cursor-p del-orari">clear</span>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row day-week" data-day="Wednesday">
                                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                                        <p>Wednesday</p>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <!-- Switch -->
                                                        <label class="switch">
                                                            <input type="checkbox" name="open-day" class="open-day"
                                                                value="Wednesday">
                                                            <span class="slider round"></span>
                                                        </label>

                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <p class="day-closed">Closed</p>
                                                        <p class="day-opened" style="display: none">Opened</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                                        <div class="row inner-ft-row">
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                                                style="display: none">
                                                                <p class="center"><span>-</span></p>
                                                            </div>
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                                                style="display: none">
                                                                <div><span class="agg-orari cursor-p">ADD
                                                                        TIMES</span><span
                                                                        class="material-icons cursor-p del-orari">clear</span>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row day-week" data-day="Thursday">
                                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                                        <p>Thursday</p>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <!-- Switch -->
                                                        <label class="switch">
                                                            <input type="checkbox" name="open-day" class="open-day"
                                                                value="Thursday">
                                                            <span class="slider round"></span>
                                                        </label>

                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <p class="day-closed">Closed</p>
                                                        <p class="day-opened" style="display: none">Opened</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                                        <div class="row inner-ft-row">
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                                                style="display: none">
                                                                <p class="center"><span>-</span></p>
                                                            </div>
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                                                style="display: none">
                                                                <div><span class="agg-orari cursor-p">ADD
                                                                        TIMES</span><span
                                                                        class="material-icons cursor-p del-orari">clear</span>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row day-week" data-day="Friday">
                                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                                        <p>Friday</p>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <!-- Switch -->
                                                        <label class="switch">
                                                            <input type="checkbox" name="open-day" class="open-day"
                                                                value="Friday">
                                                            <span class="slider round"></span>
                                                        </label>

                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <p class="day-closed">Closed</p>
                                                        <p class="day-opened" style="display: none">Opened
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                                        <div class="row inner-ft-row">
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                                                style="display: none">
                                                                <p class="center"><span>-</span></p>
                                                            </div>
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                                                style="display: none">
                                                                <div><span class="agg-orari cursor-p">ADD
                                                                        TIMES</span><span
                                                                        class="material-icons cursor-p del-orari">clear</span>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row day-week" data-day="Saturday">
                                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                                        <p>Saturday</p>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <!-- Switch -->
                                                        <label class="switch">
                                                            <input type="checkbox" name="open-day" class="open-day"
                                                                value="Saturday">
                                                            <span class="slider round"></span>
                                                        </label>

                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <p class="day-closed">Closed</p>
                                                        <p class="day-opened" style="display: none">
                                                            Opened</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                                        <div class="row inner-ft-row">
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                                                style="display: none">
                                                                <p class="center"><span>-</span></p>
                                                            </div>
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                                                style="display: none">
                                                                <div><span class="agg-orari cursor-p">ADD
                                                                        TIMES</span><span
                                                                        class="material-icons cursor-p del-orari">clear</span>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row day-week" data-day="Sunday">
                                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                                        <p>Sunday</p>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <!-- Switch -->
                                                        <label class="switch">
                                                            <input type="checkbox" name="open-day" class="open-day"
                                                                value="Sunday">
                                                            <span class="slider round"></span>
                                                        </label>

                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                                        <p class="day-closed">Closed</p>
                                                        <p class="day-opened" style="display: none">
                                                            Opened</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                                        <div class="row inner-ft-row">
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                                                style="display: none">
                                                                <p class="center"><span>-</span></p>
                                                            </div>
                                                            <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                                                style="display: none">
                                                                <input type="time">
                                                            </div>
                                                            <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                                                style="display: none">
                                                                <div><span class="agg-orari cursor-p">ADD
                                                                        TIMES</span><span
                                                                        class="material-icons cursor-p del-orari">clear</span>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer"> <a style="cursor:pointer"
                                                    class="modal-action modal-close save waves-effect waves-red btn-flat">SAVE</a>
                                                <a style="cursor:pointer"
                                                    class="modal-action modal-close waves-effect waves-green btn-flat">CANCEL</a>
                                            </div>
                                        </div>
                                        <div id="inner-ft-rowTemplate" style="display: none">
                                            <div class="row added">
                                                <div
                                                    class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from">
                                                    <input type="time">
                                                </div>
                                                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened">
                                                    <p class="center"><span>-</span></p>
                                                </div>
                                                <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to">
                                                    <input type="time">
                                                </div>
                                                <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened">
                                                    <div><span class="agg-orari cursor-p">ADD
                                                            TIMES</span><span
                                                            class="material-icons cursor-p del-orari">clear</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <!--/ end modal openhours /-->

                                    </div>

                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />

                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Services:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 8</h2>
                                    </div>
                                </div> <label class="fieldlabels">First Name: *</label> <input type="text" name="fname"
                                    placeholder="First Name" /> <label class="fieldlabels">Last Name: *</label> <input
                                    type="text" name="lname" placeholder="Last Name" /> <label
                                    class="fieldlabels">Contact No.: *</label> <input type="text" name="phno"
                                    placeholder="Contact No." /> <label class="fieldlabels">Alternate Contact No.:
                                    *</label> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Keyword’s Ranking:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 8</h2>
                                    </div>
                                </div> <label class="fieldlabels">First Name: *</label> <input type="text" name="fname"
                                    placeholder="First Name" /> <label class="fieldlabels">Last Name: *</label> <input
                                    type="text" name="lname" placeholder="Last Name" /> <label
                                    class="fieldlabels">Contact No.: *</label> <input type="text" name="phno"
                                    placeholder="Contact No." /> <label class="fieldlabels">Alternate Contact No.:
                                    *</label> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">SEO:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 8</h2>
                                    </div>
                                </div> <label class="fieldlabels">First Name: *</label> <input type="text" name="fname"
                                    placeholder="First Name" /> <label class="fieldlabels">Last Name: *</label> <input
                                    type="text" name="lname" placeholder="Last Name" /> <label
                                    class="fieldlabels">Contact No.: *</label> <input type="text" name="phno"
                                    placeholder="Contact No." /> <label class="fieldlabels">Alternate Contact No.:
                                    *</label> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 8</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="{{ asset('assets/js/steps_script.js') }}">
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js'></script>
    <script src="{{ asset('assets/js/opentime.js') }}"></script>
</div>
@endsection