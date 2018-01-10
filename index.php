<!doctype HTML>
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
		  <div class="slideTitle" align="center">
			<img class="bannerElement" src="./photos/cv_tunnustus_logo-01.png" alt="Logo" />
			<!--
			<img class="slideTitleElement companyLogo" src="./photos/cv_logo-01.png" alt="Logo" />
			<p class="slideTitleElement companyElement">CV.ee</p>
			<p class="slideTitleElement activityElement">#tunnustakolleegi</p>
			-->
		  </div>
		  <div class="actionLine" align="center"><p>Tunnusta head kolleegi!</p></div>
		  <div class="informationLine" align="center"><p>Üllata ühte või mitut kolleegi, andes talle tunnustuse, mida
				ta väärib 100% ning edasta see tema Facebooki seinale</p></div>
		  <div class="photoSection" align="center">
			<img class="inheritDimension" src="./photos/imago_front-01.png" alt="cv.ee Logo" />
		  </div>
		  <div class="buttonDiv">
		    <button id="1" type="button" class="forwardButton">Alustan</button>
		  </div>
		</div>

		<div class="mySlides ">
		  <div class="slideTitle" align="center">
			<img class="bannerElement" src="./photos/cv_tunnustus_logo-01.png" alt="Logo" />
			<!--
			<img class="slideTitleElement companyLogo" src="./photos/cv_logo-01.png" alt="Logo" />
			<p class="slideTitleElement companyElement">CV.ee</p>
			<p class="slideTitleElement activityElement">#tunnustakolleegi</p>
			-->
		  </div>
		  <div class="stepNumber" align="center">1 / 5</div>
		  <div class="actionText" align="center"><p>Vali sobiv tunnustus</p></div>
		  <div class="templateSection" align="center">
			<div id="carouselSection" class="carousel slide carouselContent inheritDimension" data-ride="carousel" data-interval="false">
			  <div class="carousel-inner inheritDimension">
				<div class="carousel-item active inheritDimension">
				  <div class="imageContainer">
				    <img id="tunnustus-01-title" class="templateImage" src="./photos/tunnustus-01.png" alt="picture" class="img-responsive"/>
				  </div>
				</div>
				<div class="carousel-item inheritDimension">
				  <div class="imageContainer">
				    <img id="tunnustus-02-title" class="templateImage" src="./photos/tunnustus-02.png" alt="picture"/>
				  </div>
				</div>
				<div class="carousel-item inheritDimension">
				  <div class="imageContainer">
				    <img id="tunnustus-03-title" class="templateImage" src="./photos/tunnustus-03.png" alt="picture"/>
				  </div>
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
		    <button id="2" type="button" class="forwardButton generateCanvas">Jätkan</button>
		  </div>
		</div>

		<div class="mySlides ">
		  <div class="slideTitle" align="center">
			<img class="bannerElement" src="./photos/cv_tunnustus_logo-01.png" alt="Logo" />
			<!--
			<img class="slideTitleElement companyLogo" src="./photos/cv_logo-01.png" alt="Logo" />
			<p class="slideTitleElement companyElement">CV.ee</p>
			<p class="slideTitleElement activityElement">#tunnustakolleegi</p>
			-->
		  </div>
		  <div class="stepNumber" align="center">2 / 5</div>
		  <div class="actionText" align="center">
			<p>Kirjuta siia lahtrisse ettevõtte nimi,
				kus tunnustamist väärt kolleeg töötab
			</p>
		  </div>
		  <div class="contentSection" align="center">
		    <input type="text" class="form-group companyInput" maxLength="15" placeholder="Ettevõtte nimi"/>
		    <div class="inheritDimension inputNote">
				<p>PS! Maksimum tähemärkide arv on 15</p>
			</div>
		  </div>
		  <div class="buttonDiv">
			<button id="3" type="button" class="forwardButton addCompanyName">Jätkan</button>
		  </div>
		</div>
		
		<div class="mySlides ">
		  <div class="slideTitle" align="center">
			<img class="bannerElement" src="./photos/cv_tunnustus_logo-01.png" alt="Logo" />
			<!--
			<img class="slideTitleElement companyLogo" src="./photos/cv_logo-01.png" alt="Logo" />
			<p class="slideTitleElement companyElement">CV.ee</p>
			<p class="slideTitleElement activityElement">#tunnustakolleegi</p>
			-->
		  </div>
		  <div class="stepNumber" align="center">3 / 5</div>
		  <div class="actionText" align="center">
			<p>Kirjuta siia lahtrisse kolleegi nimi,
				keda soovid tunnustada
			</p>
		  </div>
		  <div class="contentSection" align="center">
		    <input type="text" class="form-group nameInput" maxLength="35" placeholder="Ees- ja perekonnanimi"/>
			<div class="inheritDimension inputNote">
				<p>PS! Maksimum tähemärkide arv on 35</p>
			</div>
		  </div>
		  <div class="buttonDiv">
			<button id="4" type="button" class="forwardButton addPersonName">Jätkan</button>
		  </div>
		</div>
		
		<div class="mySlides ">
		  <div class="slideTitle" align="center">
			<img class="bannerElement" src="./photos/cv_tunnustus_logo-01.png" alt="Logo" />
			<!--
			<img class="slideTitleElement companyLogo" src="./photos/cv_logo-01.png" alt="Logo" />
			<p class="slideTitleElement companyElement">CV.ee</p>
			<p class="slideTitleElement activityElement">#tunnustakolleegi</p>
			-->
		  </div>
		  <div class="stepNumber" align="center">4 / 5</div>
		  <div class="actionText" align="center">
			<p>Kirjuta siia lahtrisse, miks su kolleeg
				on ära teeninud selle tunnustuse</p>
		  </div>
		  <div class="contentSection textAreaSection" align="center">		    
			<textarea rows="4" cols="50" class="form-group titleOf textAreaInput" maxLength="200"> 
			
			</textarea>
		    <div class="inheritDimension inputNote">
				<p>PS! Maksimum tähemärkide arv on 200</p>
			</div>
		  </div>
		  <div class="buttonDiv">
			<button id="5" type="button" class="generatePicture forwardButton">Genereeri pilt</button>
		  </div>
		</div>
		
		<div class="mySlides ">
		  <div class="slideTitle" align="center">
			<img class="bannerElement" src="./photos/cv_tunnustus_logo-01.png" alt="Logo" />
			<!--
			<img class="slideTitleElement companyLogo" src="./photos/cv_logo-01.png" alt="Logo" />
			<p class="slideTitleElement companyElement">CV.ee</p>
			<p class="slideTitleElement activityElement">#tunnustakolleegi</p>
			-->
		  </div>
		  <div class="stepNumber" align="center"></div>
		  <div class="actionText" align="center"><p>Jaga genereeritud pilt oma sõbrale!</p></div>
		  <div class="photoSection finishSection" align="center">

		  </div>
		  <div class="buttonDiv">
			<button id="shareToFacebook" type="button" class="shareButton">Jagan facebookis</button>
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
		  console.log('starting to save');
		  $.ajax({
			type: 'POST',
			url: './scripts/SaveImage.php',
			data: {
			  imgBase: dataUrl
			},
			success: function(data){
				console.log(data);
			  $('.finishSection').append(
			    '<img id="generatedPicture" class="inheritDimension" align="center" src="'+data+'">'
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
			  selectedImage = $(this).find('img');
			}
		  });
		  
		  var image = new Image();
		  
		  image.onload = function(){
			
			ctx.canvas.width = this.width;
		    ctx.canvas.height = this.height;
		  		  
		    background.src = './photos/'+ selectedImage[0]['id'] + '.png';
		    background.onload = function(){
		      ctx.drawImage(background,0,0);   
			  
			  ctx.fillStyle = "white";
			  
			  ctx.font = "bold 40px arial";
			  ctx.fillText($('.companyInput').val(), 500, 150);
			  ctx.font = "40px arial";
			  ctx.fillText($('.nameInput').val(), 500, 500);
			  //font = "30px arial";
			  //ctx.fillText($('.titleOf').val(), 570, 450);
		    
			  saveImageToServer(canvas.toDataURL(), id);
			}			
		  };
		  
		  image.src = selectedImage[0]['src'];
		  	
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
		var pictureLocation = $('#generatedPicture').attr('src');
	    pictureLocation = window.location+pictureLocation.replace('.', '');
		
		console.log(pictureLocation);
		
		FB.ui({
			method: 'share',
			href: pictureLocation,
		}, function(response){});
	    
	  });
		
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