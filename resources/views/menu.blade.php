<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bumdesa Darussalam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php require_once('public/css/phpcss.php'); ?>

  </head>
  <body>

  	@include('komponen.headermenu')

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(https://images.unsplash.com/photo-1515694590185-73647ba02c10?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="..">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

   

    <section class="ftco-section" id="list-menu">
    	<div class="container">

    		<div class="mx-auto d-block text-center">
    		<h2>DAFTAR MENU KOPI RIMBA RINJANI</h2>
    		<br><br>
    		</div>

    		@php
    		$i = 1;
    		@endphp
    		<form method="POST" action="menu">
    			@csrf
    			<div class="row">
    				@foreach ($tipeA as $key => $tipeB) 
              <div class="col-md-6 mb-5 pb-3">
		        	<h3 class="mb-5 heading-pricing ftco-animate"> {{ $tipeB->nama_tipe }} </h3>

		            @foreach ($barang as $keyB => $data) 
		                @if ($tipeB->id_tipe == $data->tipe_produk) 
					        		<div class="pricing-entry d-flex ftco-animate">
					        			@if($data->foto_produk != null)
					        				<div class="img" style="background-image: url( {{ asset('/storage/app/public/' . $data->foto_produk)  }} );"></div>
					        			@else
					        				<div class="img" style="background-image: url(https://images.unsplash.com/photo-1614350292382-c448d0110dfa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80);"></div>
					        			@endif

					        			<div class="desc pl-3">
						        			<div class="d-flex text align-items-center">
						        				<h3><span>{{ ucwords($data->nama_produk) }}</span></h3>
						        				<span class="price">RP{{ $data->harga_produk }}/{{ $data->ukuran_kemasan }}</span>
						        			</div>
						        			<div class="d-block">
						        				<p>{{ $data->detail_komposisi }}</p>
						        			</div>

						        			<div class="custom-control custom-checkbox">
													  <input type="checkbox" name="ch{{$i}}" value="{{ $data->nama_produk }}" class="custom-control-input" id="customCheck{{$i}}">
													  <label class="custom-control-label" for="customCheck{{$i}}">Beli produk ini</label>
													</div>

													@php
													$i++;
													@endphp

						        		</div>
					        		</div>
		                @endif
		            @endforeach
							</div>
		        @endforeach

	        </div>
	        <input type="submit" value="Hubungi Penjual" name="submit" class="btn btn-primary btn-lg mx-auto d-block ftco-animate">
    		</form>
        
    	</div>
    </section>

    @include('komponen.footer')
    
  

  	@include('komponen.loader')


  <?php require_once('public/js/phpjs.php'); ?>
    
  </body>
</html>