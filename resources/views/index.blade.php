<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bumdesa Darussalam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="{{ $seo->description }}">
    <meta name="keywords" content="{{ $seo->keywords }}">
    <meta name="author" content="{{ $seo->author }}">
    <meta name="robots" content="@if($seo->xindex == 1)index @else noindex @endif,@if($seo->xfollow == 1) follow @else nofollow @endif">

    
    <?php require_once('public/css/phpcss.php'); ?>

    

  </head>
  <body>
  	
  	@include('komponen.header')

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(https://images.unsplash.com/photo-1515694590185-73647ba02c10?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Selamat Datang</span>
              <h1 class="mb-4">Bumdesa Darussalam</h1>
              <p class="mb-4 mb-md-5">Kopi seputaran perkebunan dan hutan Lombok Utara.</p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(https://images.unsplash.com/photo-1522747776116-64ee03be1dad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Selamat Datang</span>
              <h1 class="mb-4">Bumdesa Darussalam</h1>
              <p class="mb-4 mb-md-5">Kopi seputaran perkebunan dan hutan Lombok Utara.</p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(https://image.freepik.com/free-photo/flat-lay-tray-with-coffee-cup-cinnamon-sticks_23-2148808586.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Selamat Datang</span>
              <h1 class="mb-4">Bumdesa Darussalam</h1>
              <p class="mb-4 mb-md-5">Kopi seputaran perkebunan dan hutan Lombok Utara.</p>
            </div>

          </div>
        </div>
      </div>
    </section>

    

    <section class="ftco-about d-md-flex" id="about">

    	<div class="one-half img" style="background-image: url(https://images.unsplash.com/photo-1561113825-49e39f7e1f8f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80);">
    		
    	</div>

    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Temukan</span>
	          <h2 class="mb-4">Kisah Kami</h2>
	        </div>
	        <div>
            @php
              echo substr($about->ourstory, 0, 500) . "...";
            @endphp
	  				<p><a href="about" class="btn btn-primary btn-outline-primary px-4 py-3">Go To About Page</a></p>
	  			</div>
  			</div>
    	</div>
    </section>

    <section class="ftco-section" id="menu">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Temukan</span>
	            <h2 class="mb-4">Produk Kami</h2>
	            <p class="mb-4">{!!$about->ourmenu!!}</p>
	            <p><a href="menu" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">

              @foreach($foto as $key => $fotoA)
      					<div class="col-md-6">
      						<div class="menu-entry">
  		    					<s href="#" class="img" style="background-image: url({{ asset('/storage/app/public/' . $fotoA) }});  "></s>
  		    				</div>
      					</div>
                @if($key == 3)
                  @break
                @endif
              @endforeach

    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    @include('komponen.footer')
    
  

  	@include('komponen.loader')


  <?php require_once('public/js/phpjs.php'); ?>
    
  </body>
</html>