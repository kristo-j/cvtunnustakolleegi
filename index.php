<!doctype HTML>
<?php
	require_once __DIR__ . '/fb/fb/src/Facebook/autoload.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css">
		<link rel="stylesheet" href="./scripts/bootstrap/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="./scripts/bootstrap/css/bootstrap-grid.min.css" type="text/css">
		<link rel="stylesheet" href="./scripts/bootstrap/css/bootstrap-reboot.min.css" type="text/css">
	</head>
	<body>
	
	<div class="slideshow-container col-12">

		<div class="mySlides col-12">
		  <div class="slideTitle">
		    <div>
			<span>
			  <img class="slideTitleElement" src="" alt="Logo" />
			  <p class="slideTitleElement">cv.ee</p>
			  <p class="slideTitleElement">tunnustan kolleegi</p>
			</span>
			</div>
		  </div>
		  <div class="actionLine"><p>Tunnusta head kolleegi!</p></div>
		  <div class="informationLine"><p>Võta osa oma kolleegi tunnustamisest</p></div>
		  <div class="contentSection">
			<img src="" alt="cv.ee Logo" />
		  </div>
		  <div class="buttonDiv">
		    <button id="1" type="button" class="btn btn-primary forwardButton">Alustan</button>
		  </div>
		</div>

		<div class="mySlides ">
		  <div class="slideTitle">
		    <div>
			<span>
			  <img class="slideTitleElement" src="" alt="Logo" />
			  <p class="slideTitleElement">cv.ee</p>
			  <p class="slideTitleElement">tunnustan kolleegi</p>
			</span>
			</div>
		  </div>
		  <div class="actionLine">1 / 5</div>
		  <div class="informationLine"><p>Vali sobiv disain</p></div>
		  <div class="contentSection">
			<div id="carouselSection" class="carousel slide carouselContent inheritDimension" data-ride="carousel" data-interval="false">
			  <div class="carousel-inner inheritDimension">
				<div class="carousel-item active inheritDimension">
				  <img class="templateImage" src="./photos/dank.png" alt="picture" class="img-responsive"/>
				</div>
				<div class="carousel-item inheritDimension">
				  <img class="templateImage" src="./photos/dank.png" alt="picture" class="img-responsive"/>
				</div>
				<div class="carousel-item inheritDimension">
				  <img class="templateImage" src="./photos/dank.png" alt="picture" class="img-responsive"/>
				</div>
			  </div>
			  <p class="carousel-control-prev" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </p>
			  <p class="carousel-control-next" href="" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </p>
			</div>
		  </div>
		  <div class="buttonDiv">
		    <button id="2" type="button" class="btn btn-primary forwardButton generateCanvas">Jätkan</button>
		  </div>
		</div>

		<div class="mySlides ">
		  <div class="slideTitle">
			<div>
			<span>
			  <img class="slideTitleElement" src="" alt="Logo" />
			  <p class="slideTitleElement">cv.ee</p>
			  <p class="slideTitleElement">tunnustan kolleegi</p>
			</span>
			</div>
		  </div>
		  <div class="actionLine">2 / 5</div>
		  <div class="informationLine"><p>Kirjuta siia ettevõtte nimi</p></div>
		  <div class="contentSection">
		    <input type="text" class="form-group companyInput" />
		  </div>
		  <div class="buttonDiv">
			<button id="3" type="button" class="btn btn-primary forwardButton addCompanyName">Jätkan</button>
		  </div>
		</div>
		
		<div class="mySlides ">
		  <div class="slideTitle">
			<div>
			<span>
			  <img class="slideTitleElement" src="" alt="Logo" />
			  <p class="slideTitleElement">cv.ee</p>
			  <p class="slideTitleElement">tunnustan kolleegi</p>
			</span>
			</div>
		  </div>
		  <div class="actionLine">3 / 5</div>
		  <div class="informationLine"><p>Kolleegi nimi</p></div>
		  <div class="contentSection">
		    <input type="text" class="form-group nameInput" />
		  </div>
		  <div class="buttonDiv">
			<button id="4" type="button" class="btn btn-primary forwardButton addPersonName">Jätkan</button>
		  </div>
		</div>
		
		<div class="mySlides ">
		  <div class="slideTitle">
			<div>
			<span>
			  <img class="slideTitleElement" src="" alt="Logo" />
			  <p class="slideTitleElement">cv.ee</p>
			  <p class="slideTitleElement">tunnustan kolleegi</p>
			</span>
			</div>
		  </div>
		  <div class="actionLine">4 / 5</div>
		  <div class="informationLine"><p>Tiitel</p></div>
		  <div class="contentSection">
		    <input type="text" class="form-group nameInput titleOf" />
		  </div>
		  <div class="buttonDiv">
			<button id="5" type="button" class="btn btn-primary generatePicture">Jätkan</button>
		  </div>
		</div>
		
		<div class="mySlides ">
		  <div class="slideTitle">
			<div>
			<span>
			  <img class="slideTitleElement" src="" alt="Logo" />
			  <p class="slideTitleElement">cv.ee</p>
			  <p class="slideTitleElement">tunnustan kolleegi</p>
			</span>
			</div>
		  </div>
		  <div class="actionLine"></div>
		  <div class="informationLine"><p>bblablablablab</p></div>
		  <div class="contentSection finishSection">

		  </div>
		  <div class="buttonDiv">
			<button id="shareToFacebook" type="button" class="btn btn-primary">Jagan facebookis</button>
		  </div>
		</div>
		
	</div>
	
	<br>
		
	<div style="display: none;">
	  <canvas id="templateCanvas"></canvas>
	</div>
			
	<script src="./scripts/jquery-3.2.1.min.js" ></script>
	<script src="./scripts/bootstrap/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		
		var canvas = document.getElementById('templateCanvas'),
		    ctx = canvas.getContext('2d');
		var background = new Image();	
		
		function saveImageToServer(dataUrl, id){
		  $.ajax({
			type: 'POST',
			url: './scripts/SaveImage.php',
			data: {
			  imgBase: dataUrl
			},
			success: function(data){
			  $('.finishSection').append(
			    '<img class="inheritDimension" src="'+data+'">'
			  );
			}
		  }).done(function(){
		    currentSlide(id+1);
		  });
		}
		
		$('.generatePicture').on('click', function(){
		  var selectedImage;
		  var id = parseInt($(this).attr('id'));
		  
		  $('.carousel-item').each(function(i){
		    if($(this).hasClass('active')){
			  selectedImage = $(this)[0]['childNodes'][1];
			}
		  });
		  
		  var image = new Image();
		  
		  image.onload = function(){
			
			ctx.canvas.width = this.width;
		    ctx.canvas.height = this.height;
		  
		    background.src = selectedImage.src;
		    background.onload = function(){
		      ctx.drawImage(background,0,0);   
			  
			  ctx.fillText($('.companyInput').val(), 50, 50);
			  ctx.fillText($('.nameInput').val(), 80, 50);
			  ctx.fillText($('.titleOf').val(), 110, 50);
		    
			   saveImageToServer(canvas.toDataURL(), id);
			}			
		  };
		  
		  image.src = selectedImage.src;
		  	
		});
		
		$('.carousel-control-prev').on('click', function(){
		  $('#carouselSection').carousel('prev');
		});
		
		$('.carousel-control-next').on('click', function(){
		  $('#carouselSection').carousel('next');
		});
		
		$('.templateImage').on('load', function(){
			console.log('boi');
		  var css;
		  var ratio=$(this).width() / $(this).height();
		  var pratio=$(this).parent().width() / $(this).parent().height();
		  if (ratio<pratio) css={width:'auto', height:'100%'};
		  else css={width:'100%', height:'auto'};
		  console.log(ratio, pratio, css);
		  $(this).css(css);
		});
		
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  if (n > slides.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none";  
		  }

		  slides[slideIndex-1].style.display = "block";  

		}
	
	  $('.forwardButton').on('click', function(){
		  var id = parseInt($(this).attr('id'));
		  currentSlide(id+1);
	  });
	
	  $('#shareToFacebook').on('click', function(){
	    FB.getLoginStatus(function(response) {
		  if (response.status === 'connected') {
			var uid = response.authResponse.userID;
			var accessToken = response.authResponse.accessToken;
			console.log("logged in");
			FB.ui({
				method: 'share',
				href: 'https://developers.facebook.com/docs/'
			}, function(response){});
			
			} else if (response.status === 'not_authorized') {
			// the user is logged in to Facebook, 
			// but has not authenticated your app
			FB.login(function(){
			
		}, {scope: 'publish_actions'});
		  } else {
			// the user isn't logged in to Facebook.
			FB.login(function(){
			
		}, {scope: 'publish_actions'});
		  }
		 });
	  });
	
	  function checkIfLoggedIn(){
		FB.getLoginStatus(function(response) {
		  if (response.status === 'connected') {
			var uid = response.authResponse.userID;
			var accessToken = response.authResponse.accessToken;
			console.log("logged in");
			FB.ui({
				method: 'share',
				href: 'https://developers.facebook.com/docs/'
			}, function(response){});
			
			} else if (response.status === 'not_authorized') {
			// the user is logged in to Facebook, 
			// but has not authenticated your app
				FB.login(function(){
				  if (response.status === 'connected') {
					// Logged into your app and Facebook.
					FB.ui({
						method: 'share',
						href: 'https://developers.facebook.com/docs/'
					}, function(response){});
				  } else {
					// The person is not logged into this app or we are unable to tell. 
				  }
				}, {scope: 'publish_actions'});
		  } else {
			// the user isn't logged in to Facebook.
			FB.login(function(){
			  if (response.status === 'connected') {
				// Logged into your app and Facebook.
				console.log('connected');
				FB.ui({
					method: 'share',
					href: 'https://developers.facebook.com/docs/'
				}, function(response){});
			  } else {
				// The person is not logged into this app or we are unable to tell. 
			  }
			}, {scope: 'publish_actions'});
		  }
		});
	  }
	  
	  function myFacebookLogin() {
		FB.login(function(){
			
		}, {scope: 'publish_actions'});
	  }	
	
	  window.fbAsyncInit = function() {
		FB.init({
		  appId            : '140977083233016',
		  autoLogAppEvents : true,
		  xfbml            : true,
		  version          : 'v2.11'
		});
	  };

	  (function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "https://connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	});
	</script>

	</body>
</html>