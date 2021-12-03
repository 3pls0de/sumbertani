<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bumdesa Darussalam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php require_once('public/css/phpcss.php'); ?>

  </head>
  <body>
  	
  	@include('komponen.headerabout')

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(https://images.unsplash.com/photo-1515694590185-73647ba02c10?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">About Us</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="..">Home</a></span> <span>About</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-about d-md-flex" id="about">
    	<div class="one-half img" style="background-image: url(https://images.unsplash.com/photo-1561113825-49e39f7e1f8f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Temukan</span>
	          <h2 class="mb-4">Kisah Kami</h2>
	        </div>
	        <div>
	  				{!! $about->ourstory !!}
	  			</div>
  			</div>
    	</div>
    </section>

    @include('komponen.footer')
    
  

  	@include('komponen.loader')


  <?php require_once('public/js/phpjs.php'); ?>
    
  </body>
</html>