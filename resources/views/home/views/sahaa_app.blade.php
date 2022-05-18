@extends('front.main')
<style>
ul {
  list-style: none;
}

.ul .li:before {
	color: #e87526;
  content: '✓';
}
</style>
@section('container')

<div class="container">
	<div class="row">
		<div class=" col-lg-12 col-sm-12">
			<center>
				<br><br>
				<h1>The Sahaa app for iOS & Android</h1>
			</center>
			<div class="row">
				<div class="col-lg-12 col-sm-12"><br><br>
					<center>
						<p style="font-size: 18px">Find local businesses on the go</p>
					<p style="font-size: 19px">The Sahaa app is the quickest way to find the businesses near you, wherever you are. Download the free Sahaa app on the App Store or Google Play now *</p>
					</center>
					
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<center>
						<img src="{{('assets_1/images/pic/pic163.PNG')}}"  width="270px" height="450px" class="d-inline-block align-top" alt="">
					</center>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<ul style="font-size: 19px" class="ul">
					  <li class="li">&nbsp;&nbsp;Search the UK’s leading online business directory on the go</li>
					  <li class="li">&nbsp;&nbsp;Find and connect with millions of local businesses</li>
					  <li class="li">&nbsp;&nbsp;Keep your favourite services and businesses close at hand</li>
					  <li class="li">&nbsp;&nbsp;Rate and review businesses with ease</li>
					  <li class="li">&nbsp;&nbsp;Get directions to a business</li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<center>
						<img src="{{('assets_1/images/pic/pic162.PNG')}}" width="270px" height="450px" class="d-inline-block align-top" alt="">
					</center>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
