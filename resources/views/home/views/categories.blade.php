@extends('front.main')

<style>
.sear {
	padding-left:35px;
	background-repeat: no-repeat;
	background-position-y: 1px;
	background-image: url('{{('assets_1/images/pic/pic147.PNG')}}');
}
</style>
@section('container')
<div class="main-text">
			    <div class="col-md-12 text-center">
			    	<br>
			    	<br>
			        

			      				<div class="container">
			      					<div class="row">
			      						<div class="col-sm-12 col-md-12 col-lg-12">
			      							<div class="input-group mb-3">
											  <!-- <div class="input-group-prepend">
											    <span class="" style="border-right: white;"><img class="d-block w-100" src="{{('assets_1/images/pic/pic145.png')}}" height="47px" alt="Third slide" style=""></span>
											  </div> -->
											  
											  <!-- <i class="fa fa-search" style="color: #cccccc;background-color: white;font-size: 22px;border-right: none;padding-top: 10px;padding-left: 5px;width: 35px;height: 50px;margin-top: 0.9px"></i> -->
											  <select list="browsers" name="myBrowser" type="text" id="business_search"
                                                                placeholder="Select city, Area" style="height: 50px;padding-left: 40px "  class=" form-control combobox sear">
																  <option>Select city, Area</option>
																  <option value="PA">Sharjah</option>
																  <option value="CT">Dubai</option>
																  <option value="NY">New York</option>
																  <option value="MD">Maryland</option>
																  <option value="VA">Virginia</option>
																</select>
											 
											  <!-- <div class="input-group-prepend">
											    <span class=""><img class="d-block w-100" src="{{('assets_1/images/pic/pic146.png')}}" height="47px" alt="Third slide"></span>
											  </div> -->
											   <!-- <i class="fa fa-map-marker" style="color: #cccccc;background-color: white;font-size: 22px;border-right: none;padding-top: 10px;padding-left: 5px;height: 50px;"></i> -->
											  <select list="browsers" name="myBrowser" type="text" id="business_search"
                                                                placeholder="All Categories" style="height: 50px;" class=" form-control combobox ">
																  <option>All Categories</option>
																  <option value="Automotive">Automotive</option>
																  <option value="Business Support & Supplies">Business Support & Supplies</option>
																  <option value="Computer Programming & Electronics">Computer Programming & Electronics</option>
																  <option value="Construction & Contractors">Construction & Contractors</option>
																  <option value="Education">Education</option>
																   <option value="Entertainment">Entertainment</option>
																    <option value="Food & Dining">Food & Dining</option>
																     <option value="Health & Medicine">Health & Medicine</option>
																    <option value="Home & Garden">Home & Garden</option>
																</select>
											  				  
											  <button style="height: 50px;width: 17%;background-color: black;color: white">Search</button>
											</div>
			      						</div>
			      					</div>
			      				</div>
			    </div>
			</div>

<!-- <div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<br><br>
			<div class="site-search-box-outer">
                <div class="site-search-box-inner">
                    <div class="site-search-box-main">
                        <div class="site-search-box-main-inner">
                            <div class="site-search-box-main-outer">
                                <div class="search-form-outer">
                                    <div class="search-form-inner">
                                        <form action="">
                                            <div class="search-form-main">
                                                <div class="form-fiels-inner">
                                                    <div class="form-field-inner">
                                                        <div class="form-field-icon">
                                                            <div class="field-search-icon" >
                                                               
                                                            </div>
                                                           
																<select list="browsers" name="myBrowser" type="text" id="business_search"
                                                                placeholder="Select city, Area" style="height: 50px;width: 250px "  class="combobox sear">
																  <option>Select city, Area</option>
																  <option value="PA">Sharjah</option>
																  <option value="CT">Dubai</option>
																  <option value="NY">New York</option>
																  <option value="MD">Maryland</option>
																  <option value="VA">Virginia</option>
																</select>
                                                        </div>
                                                        <div class="form-field-icon">
                                                            <div class="field-search-icon">
                                                                
                                                            </div>
                                                            <input  list="browsers" name="myBrowser" type="text" id="business_search"
                                                                placeholder="All Categories" style="height: 50px;width: 600px">
                                                                <select list="browsers" name="myBrowser" type="text" id="business_search"
                                                                placeholder="All Categories" style="height: 50px;width: 600px;border-left: none;" class="combobox ">
																  <option>All Categories</option>
																  <option value="Automotive">Automotive</option>
																  <option value="Business Support & Supplies">Business Support & Supplies</option>
																  <option value="Computer Programming & Electronics">Computer Programming & Electronics</option>
																  <option value="Construction & Contractors">Construction & Contractors</option>
																  <option value="Education">Education</option>
																   <option value="Entertainment">Entertainment</option>
																    <option value="Food & Dining">Food & Dining</option>
																     <option value="Health & Medicine">Health & Medicine</option>
																    <option value="Home & Garden">Home & Garden</option>
																</select>
                                                        </div>
                                                        <div class="form-field-button" >
                                                            <button style="height: 50px;width: 200px">Search</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div> -->

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<br><br>
			<center>
				<img src="{{('assets_1\icon\Categoryicons\Automotive\SVG\Automotive.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
					
					<p style="font-size:  18px"><b>Automotive</b></p>
					<p style="font-size: 11px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet<br>
					dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit <br>lobortis nisl ut aliquip ex ea commodo </p>
			</center>
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<hr>
			<br><br>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="row" style="padding-left: 60px">
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Automotive\SVG\Asset.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Auto Accessories</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Automotive\SVG\Auto-Dealers – New.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Auto Dealers – New</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Automotive\SVG\Auto-Dealers – New.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Auto Dealers – Used</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Automotive\SVG\Detail & Carwash.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Detail & Carwash</p>
						
					</center>
				</div>

				<div class="col-lg-3 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Automotive\SVG\Gas Stations.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Gas Stations</p>
						
					</center>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-6">
					<center>
						<img id="myDiv" src="{{('assets_1\icon\Categoryicons\Automotive\SVG\Motorcycle Sales & Repair.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Motorcycle Sales & Repair	</p>
						
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Automotive\SVG\Rental & Leasing.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Rental & Leasing	</p>
						
					</center>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Automotive\SVG\Service, Repair & Parts.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Service, Repair & Parts	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Automotive\SVG\Towing.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Towing	</p>
						
					
				</div>
			</div>
			<div class="row">
				
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<center>
						<br><br>
						<img src="{{('assets_1\icon\Categoryicons\Business Support & Supplies\SVG\Business Support & Supplies.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px"><b>Business Support & Supplies</b>	</p>
						
						<p style="font-size: 11px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet<br>
						dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-<br>cipit lobortis nisl ut aliquip ex ea commodo </p>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<hr>
			<br><br>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="row">
				<div class="col-lg-1 ">
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Business Support & Supplies\SVG\Consultants.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Consultants	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Business Support & Supplies\SVG\Employment Agency.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Employment Agency	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Business Support & Supplies\SVG\Marketing & Communication .svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Marketing & Communication	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Business Support & Supplies\SVG\Office Supplies.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Office Supplies	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Business Support & Supplies\SVG\Printing & Publishing.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Printing & Publishing	</p>
						
					</center>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1">
					
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Computer Programming & Electronics\SVG\Computer Programming & Electronics.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px"><b>Computer Programming & Electronics</b>	</p>
						
						<p style="font-size: 11px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet<br>
						dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-<br>cipit lobortis nisl ut aliquip ex ea commodo  </p>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<hr>
			<br><br>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="row">
				<div class="col-lg-2 ">
					
				</div>
				<div class="col-lg-2 ">
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Computer Programming & Electronics\SVG\Computer Programming .svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Computer Programming & Support 	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Computer Programming & Electronics\SVG\Consumer Electronics .svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Consumer Electronics & Accessories	</p>
						
					</center>
				</div>
				<div class="col-lg-2 ">
					
				</div>
				<div class="col-lg-2">
					
				</div>
			</div>
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12">
					<center>
						<br><br>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Construction & Contractors.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px"><b>Construction & Contractors</b>	</p>
						
						<p style="font-size: 11px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet<br>
						dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-<br>cipit lobortis nisl ut aliquip ex ea commodo  </p>
					</center>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<hr>
			<br><br>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="row" style="padding-left: 70px">
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Construction & Contractors.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Roofers</p>
						
					</center>
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Blasting & Demolition .svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Blasting & Demolition	</p>
						
					</center>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Building Materials.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Building Materials & Supplies	</p>
						
					</center>
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Construction.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Construction Companies	</p>
						
					</center>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-6">
					
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Engineer.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Engineer, Survey	</p>
						
					</center>
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Electricians.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Electricians	</p>
						
					</center>
					
				</div>
				
				<div class="col-lg-2 col-md-2 col-sm-6">
					
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Environmental Assessments.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Environmental Assessments	</p>
						
					</center>
					
				</div>
				<div class="col-lg-3 col-md-2 col-sm-6">
					
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Inspectors.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Inspectors	</p>
						
					</center>
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Plaster & Concrete.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Plaster & Concrete	</p>
						
					</center>
					
				</div>
				<div class="col-lg-3 col-md-2 col-sm-6">
					
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Plumbers.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Plumbers	</p>
						
					</center>
				</div>
				<!-- <div class="col-lg-2 col-md-2 col-sm-6">
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Architects, Landscape Architects, Engineers & Surveyors .svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Architects, Landscape Architects, Engineers & Surveyors  </p>
						
					</center>
				</div> -->
			</div>
			<div class="row">
				<div class="col-lg-1">
					
				</div>
				<!-- <div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>

					<center>
						<img src="{{('assets_1\icon\Categoryicons\Construction & Contractors\SVG\Architects, Landscape Architects, Engineers & Surveyors .svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Architects, Landscape Architects, Engineers & Surveyors  </p>
						
					</center>
				</div> -->
				<div class="col-lg-2 col-md-2 col-sm-6">
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					
				</div>

				<div class="col-lg-1 col-md-1 col-sm-1">
					
				</div>
				
				
			</div>
			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					<center>
						<br><br>
						<img src="{{('assets_1\icon\Categoryicons\Education\SVG\Education.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px"><b>Education</b>	</p>
						<p style="font-size: 11px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet<br>
						dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-<br>cipit lobortis nisl ut aliquip ex ea commodo </p>
					</center>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<hr>
			<br><br>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			
			<div class="row">

				<div class="col-lg-2 ">
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Education\SVG\Adult & Continuing .svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Adult & Continuing Education	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Education\SVG\Early Childhood.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Early Childhood Education	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Education\SVG\Educational Resources.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Educational Resources	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Education\SVG\Other Educational.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Other Educational	</p>
						
					</center>
				</div>

				<div class="col-lg-2 ">
					
				</div>
			</div>
			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					<center>
						<br><br>
						<img src="{{('assets_1\icon\Categoryicons\Entertainment\SVG\Entertainment.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px"><b>Entertainment</b>	</p>
						
						<p style="font-size: 11px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet<br>
						dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-<br>cipit lobortis nisl ut aliquip ex ea commodo </p>
					</center>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<hr>
			<br><br>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			
			<div class="row">

				<div class="col-lg-1 ">
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{'assets_1\icon\Categoryicons\Entertainment\SVG\Artists, Writers.svg'}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Artists, Writers	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{'assets_1\icon\Categoryicons\Entertainment\SVG\Event Planners & Supplies .svg'}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Event Planners & Supplies	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{'assets_1\icon\Categoryicons\Entertainment\SVG\Golf Courses.svg'}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Golf Courses	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{'assets_1\icon\Categoryicons\Entertainment\SVG\Movies.svg'}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Movies	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Entertainment\SVG\Productions.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Productions	</p>
						
					</center>
				</div>

				<div class="col-lg-1">
					
				</div>
			</div>
			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					<center>
						<br><br>
						<img src="{{('assets_1\icon\Categoryicons\Food & Dining\SVG\Food & Dining.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px"><b>Food & Dining	</b></p>
						
						<p style="font-size: 11px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet<br>
						dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-<br>cipit lobortis nisl ut aliquip ex ea commodo </p>
					</center>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<hr>
			<br><br>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="row">

				<div class="col-lg-2 ">
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Food & Dining\SVG\Desserts, Catering & Supplies.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Desserts, Catering & Supplies	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Food & Dining\SVG\Fast Food.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Fast Food & Carry Out	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Food & Dining\SVG\Grocery, Beverage .svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Grocery, Beverage & Tobacco	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Food & Dining\SVG\Restaurants.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Restaurants	</p>
						
					</center>
				</div>

				<div class="col-lg-2">
					
				</div>
			</div>
			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					<center>
						<br><br>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Health & Medicine.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px"><b>Health & Medicine</b>	</p>
						
						<p style="font-size: 11px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet<br>
						dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-<br>cipit lobortis nisl ut aliquip ex ea commodo </p>
					</center>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<hr>
			<br><br>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Acupuncture.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Acupuncture	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Assisted Living .svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Assisted Living & Home Health Care	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Audiologist.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Audiologist	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Chiropractic.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Chiropractic	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Clinics & Medical Centers.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Clinics & Medical Centers	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Dental.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Dental	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Diet I& Nutrition.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Diet I& Nutrition</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Laboratory, Imaging .svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Laboratory, Imaging & Diagnostic</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Massage Therapy.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Massage Therapy	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Mental Health.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Mental Health	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Nurse.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Nurse</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Optical.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Optical</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Pharmacy, Drug .svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Pharmacy, Drug & Vitamin Stores</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Physical Therapy.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Physical Therapy	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Physicians & Assistants.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Physicians & Assistants	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Podiatry.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Podiatry</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Social Worker.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Social Worker	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Animal Hospital.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Animal Hospital</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Veterinary.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Veterinary	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Animal Surgeons.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Animal Surgeons	</p>
						
					</center>
				</div>
			</div>
			<div class="row">
				
			
			</div>
			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					<center>
						<br><br>
						<img src="{{('assets_1\icon\Categoryicons\Home & Garden\SVG\Home & Garden.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px"><b>Home & Garden</b>	</p>
						
						<p style="font-size: 11px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet<br>
						dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-<br>cipit lobortis nisl ut aliquip ex ea commodo </p>
					</center>
				</div>
				
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<hr>
			<br><br>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Home & Garden\SVG\Antiques & Collectibles.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Antiques & Collectibles	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Home & Garden\SVG\Cleaning.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Cleaning	</p>
						
					</center>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Home & Garden\SVG\Crafts, Hobbies & Sports.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Crafts, Hobbies & Sports	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Home & Garden\SVG\Flower Shops.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Flower Shops	</p>
						
					</center>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Home & Garden\SVG\Home Furnishings.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Home Furnishings</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Home & Garden\SVG\Home Goods.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Home Goods	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Home & Garden\SVG\Home Improvements .svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Home Improvements & Repairs</p>
						
					</center>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Home & Garden\SVG\Landscape & Lawn Service.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Landscape & Lawn Service</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Home & Garden\SVG\Pest Control.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Pest Control</p>
						
					</center>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Home & Garden\SVG\Pool Supplies & Service.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Pool Supplies & Service	</p>
						
					</center>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6">
					<br><br>
					<center>
						<img src="{{('assets_1\icon\Categoryicons\Health & Medicine\SVG\Mental Health.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Pharmacy, Drug & Vitamin Stores	</p>
						
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-1 ">
					
				</div>
				
				<div class="col-lg-2 col-md-2 col-sm-2">
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2">
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2">
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2">
					
				</div>

				<div class="col-lg-1 col-md-1 col-sm-1">
					
				</div>
				
				
				
			</div>
		</div>
	</div>
</div>

@endsection
