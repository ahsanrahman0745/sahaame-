@extends('frontend.front.main')
<head>
<title>{{$page_name}} | Sahaa.me</title>
<link rel="icon" href="{{asset('business/assets/images/logo/icon.png')}}" type="image/png">
    <meta name="google-site-verification" content="2ngvz1n0OIXNh2dFIVfOLCexq9gGV2c_V-K8fEJRNm4" />
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-CT19N7GEB1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CT19N7GEB1');
    </script>
</head>
<style>
		.a{
			color: white;
			text-decoration: none;
			font-size: 13px
		}
		.aa{
			color: black;
			text-decoration: none;
			font-size: 20px;
		}
		.search{
			font-size: 16px;
		    padding: 10px 10px 10px 60px;
		    height: 48px;
		    background-color: #F2F2F2;
		    border-radius: 6px;
		    border: 2px solid gray;
		    box-shadow: none;
		    color: #183247;
		    width: 1100px
		}
		.ul .li{
		  display: inline;
		}
		.aaa{
			color: black;
			text-decoration: none;
			font-family: "Open Sans";
			font-size: 16px;
		}
		.s{
			color: black;
		    text-decoration: none;
		    box-sizing: border-box;
		    cursor: pointer;
		    line-height: 21.875px;
		    font-size: 15px;
		}
		.search{
			font-size: 16px;
		    padding: 10px 10px 10px 60px;
		    height: 48px;
		    background-color: #d27728;
		    border-radius: 6px;
		    border: 2px solid gray;
		    box-shadow: none;
		    color: #183247;
		    width: 1100px
		}
		div.gallery {
			  margin: 5px;
			  border: 1px solid #ccc;
			  float: left;
			  width: 280px;
			  height: 450px
			}

			div.gallery:hover {
			  border: 1px solid #777;
			}

			div.gallery img {
			  width: 100%;
			  height: auto;
			}

			div.desc {
			  padding: 15px;
			  text-align: center;
			}
			.popup {
		  position: relative;
		  display: inline-block;
		  cursor: pointer;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		}
		.popup .popuptext {
		  visibility: hidden;
		  width: 160px;
		  background-color: #555;
		  color: #fff;
		  text-align: center;
		  border-radius: 6px;
		  padding: 8px 0;
		  position: absolute;
		  z-index: 1;
		  bottom: 125%;
		  left: 50%;
		  margin-left: -80px;
		}
		.popup .popuptext::after {
		  content: "";
		  position: absolute;
		  top: 100%;
		  left: 50%;
		  margin-left: -5px;
		  border-width: 5px;
		  border-style: solid;
		  border-color: #555 transparent transparent transparent;
		}
		.popup .show {
		  visibility: visible;
		  -webkit-animation: fadeIn 1s;
		  animation: fadeIn 1s;
		}
		@-webkit-keyframes fadeIn {
		  from {opacity: 0;} 
		  to {opacity: 1;}
		}

		@keyframes fadeIn {
		  from {opacity: 0;}
		  to {opacity:1 ;}
		}	
	</style>
@section('container')
<body>
	<div class="container-fluid" style="background-color: #cccccc; height: 120px">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<h1 style="color: #0083c3">Sahaa Life Style</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<h3>Home Improvement</h3>
				<hr style="border: 2px solid #0083c3">

					<div class="row">
						<div class="col-md-3 col-sm-3 col-lg-3">
					      <div class="thumbnail">
					          <img src="{{('frontend/assets/images/pic/pic25.PNG')}}" width="100%" height="350" class="d-inline-block align-top" alt="">
					          <div class="caption">
					            <div class="desc">
								  	<h4><b>Learn how to remove all kinds of carpet stains</b></h4>
								  	<p>Don't freak out if your carpet has a stain.The most common stains on carpets and rugs, such as red wine, coffee, pet stains, ink, and more, can be removed by following these simple instructions.<div class="popup" onclick="myFunction()" style="color: blue">Click me!
									  <span class="popuptext" id="myPopup"> Visitors with a glass of red wine in their hand, kids with sticky fingers, muddy pets, and coffee drinkers alike. They're found in nearly every home, and all of them can cause unsightly stains on the carpet.</span>
									</div> </p>
								  	
								 </div>
					          </div>
					      </div>
					    </div>
					    <div class="col-md-3 col-sm-3 col-lg-3">
					      <div class="thumbnail">
					          <img src="{{('pic/pic26.png')}}" width="100%" height="350" class="d-inline-block align-top" alt="">
					          <div class="caption">
					            <div class="desc">
						  	<h4><b>Remove muddy spots from carpet</b></h4>
						  	<p>In the winter, muddy shoe or paw prints are a familiar sight in the hallway. Follow these steps to get rid of mud stains on your carpet:<br>
							Let the mud dry out first.<br>
							<div class="popup" onclick="myFunct()" style="color: blue">Click me!
							  <span class="popuptext" id="my"> Brush or vacuum up all of the mud from the carpet as much as possible. A tablespoon of dishwashing detergent mixed together with two cups of warm water is all that is needed to remove the stain. Using wet paper towels, blot the surface. If necessary, repeat until the stain is gone. Rinse and dry with a clean rag or cloth.</span>
							</div>
							
							</p>
						  </div>
					          </div>
					      </div>
					    </div>
					    <div class="col-md-3 col-sm-3 col-lg-3">
					      <div class="thumbnail">
					          <img src="{{('pic/pic27.png')}}" width="100%" height="350" class="d-inline-block align-top" alt="">
					          <div class="caption">
					            <div class="desc">
								  	<h4><b>How can you remove red wine and coffee stains from carpets?</b></h4>
								  	<p>Some of the deepest stains, such as red wine or coffee, have the potential to leave ugly traces on your carpet. You can use the following instructions to remove them:<br>
								  		<div class="popup" onclick="myFunct1()" style="color: blue">Click me!
									  <span class="popuptext" id="my1">First, use a paper towel or a clean cloth to carefully soak up any remaining wine before you begin cleaning. Warm water and two tablespoons each of dishwashing liquid and white vinegar are the perfect combination for a quick and easy cleaning solution. Apply the mixture to the stain with a clean cloth and let it sit for a few minutes. Use a dry towel to wipe the stain away one section at a time, alternating with a wet one, until it is completely gone. Allow to air dry for several minutes.<br>
									If everything else fails, mix one part washing-up liquid with two parts bleach and apply it to a cream-colored carpet. Pat it dry after applying it with a sponge. Use plenty of cold water to finish rinsing. To ensure that this mixture isn't too powerful for your carpet, it's a good idea to perform a little patch test in an unnoticed area first. Avoid using this method on a wool rug.</span>
									</div>
									</p>
								  </div>
					          </div>
					      </div>
					    </div>
					    <div class="col-md-3 col-sm-3 col-lg-3">
					      <div class="thumbnail">
					          <img src="{{('pic/pic28.png')}}" width="100%" height="350"class="d-inline-block align-top" alt="">
					          <div class="caption">
					            <div class="desc">
								  	<h4><b>How to remove stains from ink?</b></h4>
								  	<p>There are two types of ink stains: those made by ballpoint pens and those made by leaky markers.
									Soap and water are often all that is needed to remove ballpoint or washable felt tip ink. If not, then:
									<div class="popup" onclick="myFunct2()" style="color: blue">Click me!
									  <span class="popuptext" id="my2">Spray the stain with hairspray. Really. Gently blot the ink with a paper towel after applying the solution, which contains alcohol, to remove it. Don't make a big deal out of it. Repeat this process until the stain is removed. To get rid of the hairspray residue, vacuum the carpet. If you're cleaning felt tips or permanent marker ink stains, you'll want to act quickly. If you wait too long, some permanent inks will become permanent. To minimize ink stains, take the following steps:<br>
										You may need to lightly swab it with methylated spirits.<br>
										Repeat until the ink color appears to be fading away with each blot with a paper towel.
										Paper towels can be used to wipe dry the surface for a few minutes.
										When the stain is gone, use a moist cloth to remove any residual alcohol.
										The Amodex Ink and Stain Remover is highly recommended by numerous textile professionals for the most difficult ink stains. Rinse thoroughly after applying this with a little household brush or toothbrush, then pat dry with a clean towel. To erase watermarks, use a hairdryer.</span>
									</div>


									</p>
								  </div>
					          </div>
					      </div>
					    </div>

					    </div>
					    <div class="row">
					    	<div class="col-md-3">
						      <div class="thumbnail">
						          <img src="{{('pic/pic28.png')}}" width="100%" height="350" class="d-inline-block align-top" alt="">
						          <div class="caption">
						            <div class="desc">
							  	<h4><b>How to get rid of candle wax residue?</b></h4>
							  	<p>You don't want to ruin your carpet with leaking candles or melted wax. Fortunately, removing them is also quite simple. To remove wax from your carpet, follow these instructions:
								<div class="popup" onclick="myFunct3()" style="color: blue">Click me!
								  <span class="popuptext" id="my3">Using a piece of kitchen roll, iron in a circular motion over the wax drip. To avoid melting fibers, don't let iron fall on your carpet. The paper should be rubbed over the waxy region repeatedly until it has been completely absorbed. If it was a colored candle, use a few drops of methylated spirits to remove any color stains. Allow to dry before applying another layer.</span>
								</div>
								</p>
							  </div>
						          </div>
						      </div>
						    </div>	
						    <div class="col-md-3">
						      <div class="thumbnail">
						          <img src="{{('pic/pic28.png')}}" width="100%" height="350" class="d-inline-block align-top" alt="">
						          <div class="caption">
						            <div class="desc">
									  	<h4><b>Doesn't appear to be working.</b></h4>
									  	<p>Make an appointment with a local carpet cleaner to remove stains from your carpet.
										
										</p>
									  </div>
						          </div>
						      </div>
						    </div>
					    </div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<h3>Gardens</h3>
				<hr style="border: 2px solid #0083c3">
				<p>Let's discuss how the kitchen can be the heart of your home. A beautiful kitchen is a gathering spot for family and friends to cook and eat together. Making your kitchen the finest place to be, requires a lot of work. We're not talking about a complete remodel here; rather, you may begin by simply repainting your kitchen a different shade. As a result, when it comes to kitchen color schemes, you must go for a warm and inviting scheme.<br>
				We've compiled a list of different modern kitchen color trends to get you started:
				</p>
				<div class="Conditions">
					<div class="row">
						<div class="col-md-3">
						     <div class="thumbnail">
					          <img src="{{('pic/pic29.png')}}" width="100%" height="350" class="d-inline-block align-top" alt="">
					          <div class="caption">
					            <div class="desc">
								  	<h4><b>Tones of Green</b></h4>
								  	<p>We don't expect green to fade away anytime soon as one of the most popular kitchen color schemes. For a green kitchen, opt for brighter, cooler hues with plenty of natural light. Areas that receive little natural light, such as those that face north, benefit from the warmer shades. The green will help to create a cohesive look.</p>
								  	
								  </div>
					          </div>
						    </div>
						</div>
						<div class="col-md-3">
						     <div class="thumbnail">
					          <img src="{{('pic/pic30.png')}}" width="100%" height="350" class="d-inline-block align-top" alt="">
					          <div class="caption">
					            <div class="desc">
								  	<h4><b>Grey:</b></h4>
								  	<p>Grey is a traditional and safe color choice for the kitchen. Because Grey doesn't ask us to do anything, it helps us feel safe..<br>
									<div class="popup" onclick="myFunct4()" style="color: blue">Click me!
									  <span class="popuptext" id="my4"> If you're a busy person who prefers an elegant and unobtrusive kitchen, this is a great option for you. Another option is to use cray with a different color. In the kitchen, for example, pairing a cool terracotta color with a chilly tone might create a nice ambiance. Whatever color you choose to go with the dark grey, make sure it complements the style of your home and your tastes</span>
									</div>
									
									</p>
								  </div>
					          </div>
						    </div>
						</div>
						<div class="col-md-3">
						     <div class="thumbnail">
					          <img src="{{('pic/pic31.png')}}" width="100%" height="350" class="d-inline-block align-top" alt="">
					          <div class="caption">
					            <div class="desc">
								  	<h4><b>Colors of the earth</b></h4>
								  	<p>Color choices for kitchens this year should use warm and inviting chocolate tones as well as earthy hues, which are currently popular design trends.
								  		<div class="popup" onclick="myFunct5()" style="color: blue">Click me!
									  <span class="popuptext" id="my5"> The kitchen's lighter earthy cabinetry can be paired with lighter counters for a more subtle look. Though your worktops are a significant part of your overall aesthetic if you choose a white kitchen. White is one of the best kitchen color ideas for harmony and control if the rest of your design is colorful.</span>
									</div>
									</p>
								  </div>
					          </div>
						    </div>
						</div>
						<div class="col-md-3">
						     <div class="thumbnail">
					          <img src="{{('pic/pic32.png')}}" width="100%" height="350" class="d-inline-block align-top" alt="">
					          <div class="caption">
					            <div class="desc">
								  	<h4><b>Classic white</b></h4>
								  	<p>This is one of the kitchen color choices that will never go out of style: One of our top picks is White 03,
									<div class="popup" onclick="myFunct6()" style="color: blue">Click me!
									  <span class="popuptext" id="my6"> a soft white with yellow undertones that can brighten your space without taking away from its cozy, homey feel. When it comes to reflecting light, White 01 is a dazzling whiteness with grey tones that can energize any tiny kitchen idea. The tranquility that comes with the color white is well-known. When used in a kitchen, it can make it feel clean, smart, and gorgeous.</span>
									</div>
									</p>
								  </div>
					          </div>
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
						     <div class="thumbnail">
					          <img src="{{('pic/pic30.png')}}" width="100%" height="350" class="d-inline-block align-top" alt="">
					          <div class="caption">
					            <div class="desc">
								  	<h4><b>Tones of Yellow</b></h4>
								  	<p>Many of us spend most of our time in the kitchen, which is why it's considered the heart of the home. 
									<div class="popup" onclick="myFunct7()" style="color: blue">Click me!
									  <span class="popuptext" id="my7">. It's a place where we can cook, eat, and unwind while browsing our phones and chatting with friends. The upshot is that choosing colors for the kitchen that have a more lively and vibrant tone is something we regularly advocate. In this situation, yellow is one of the best color schemes for a kitchen. In a kitchen, where natural light is scarce, yellow has a calming impact on humans and is an appropriate color option. You can't help but smile when you see it because it's so bright and cheerful. </span>
									</div>
									</p>
								</div>
					          </div>
						    </div>
						</div>
						<div class="col-md-3">
						     <div class="thumbnail">
					          <img src="{{('pic/pic31.png')}}" width="100%" height="350" class="d-inline-block align-top" alt="">
					          <div class="caption">
					            <div class="desc">
								  	<h4><b>Where can you start?</b></h4>
								  	<p>Many Home Decor Companies are here to help if you're stumped on where to begin your kitchen remodel or which color scheme to go with.

									<div class="popup" onclick="myFunct8()" style="color: blue">Click me!
									  <span class="popuptext" id="my8"> 
										With just a few clicks, you can acquire an estimate, plan your project, and keep tabs on its progress through Sahaa’s Home Decor Businesses. All you have to do to receive first-rate service is search out our Business Directory, choose your favorite decoration experts around your location, select your project's options, and wait for us to match you with a project manager.<br>
										Your style project planner will spend time learning about your goals and working with designers and architects to establish a strategy. Your project manager will guarantee that vendors give you their undivided attention while we negotiate the best possible deal for you.<br>
										You may keep track of the project's progress on their website. It is necessary to keep close tabs on each stage of the procedure. A smooth and stress-free handover is ensured by our platform, which keeps everyone informed and on schedule.</span>
									</div>
									</p>
								  </div>
					          </div>
						    </div>
						</div>
						<div class="col-md-3">
						     <div class="thumbnail">
					          <img src="{{('pic/pic32.png')}}" width="100%" height="350" class="d-inline-block align-top" alt="">
					          <div class="caption">
					            <div class="desc">
								  	<h4><b>As a final word</b></h4>
								  	<p>The home's beating heart is the kitchen. It's where your family gathers to cook dinner, where you entertain guests,

									<div class="popup" onclick="myFunct9()" style="color: blue">Click me!
									  <span class="popuptext" id="my9">  and where you might even help your kids with homework these days. There's no reason for it not to be noticeable in such a busy, multipurpose area. The right color scheme is one of the best ways to elevate your space.<br>
										There is a paint color to suit everyone's taste, whether you prefer classic neutrals or vibrant hues. The Best Kitchen Decor service providers can help you transform your cooking area into a more stylish space for years to come. For kitchen color choices in 2022, green is the most popular, but other options include earthy tones, dark grey, classic white, and yellow tones. To add life and harmony to your home, it doesn't matter what color you choose.<br>
										Get a fast quotation for your kitchen color ideas project now and we'll assign you to a Home Decor Company who will assist you from start to finish, from cost to upkeep.</span>
									</div>
									</p>
								  </div>
					          </div>
						    </div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<br><br><br>
				<hr>
			</div>
		</div>
	</div>

@endsection

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
function myFunct() {
  var popup = document.getElementById("my");
  popup.classList.toggle("show");
}
function myFunct1() {
  var popup = document.getElementById("my1");
  popup.classList.toggle("show");
}
function myFunct2() {
  var popup = document.getElementById("my2");
  popup.classList.toggle("show");
}
function myFunct3() {
  var popup = document.getElementById("my3");
  popup.classList.toggle("show");
}
function myFunct4() {
  var popup = document.getElementById("my4");
  popup.classList.toggle("show");
}
function myFunct5() {
  var popup = document.getElementById("my5");
  popup.classList.toggle("show");
}
function myFunct6() {
  var popup = document.getElementById("my6");
  popup.classList.toggle("show");
}
function myFunct7() {
  var popup = document.getElementById("my7");
  popup.classList.toggle("show");
}
function myFunct8() {
  var popup = document.getElementById("my8");
  popup.classList.toggle("show");
}
function myFunct9() {
  var popup = document.getElementById("my9");
  popup.classList.toggle("show");
}
</script>