<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Bumdesa Darussalam</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- style -->
  @php
  require_once('public/css/phpcssadmin.php')
  @endphp

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('komponen.admin.header')


  <!-- ======= Sidebar ======= -->
  @include('komponen.admin.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tabel Produk</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          @if(session()->has('upSuccess') )
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('upSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @if(session()->has('delSuccess') )
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('delSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Produk</h5>

              <a class="btn btn-primary" href="dashform">Tambah Produk</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tipe Produk</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Ukuran Kemasan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($barang as $key=> $produk)
                  <tr>
                    <th scope="row">{{$key+=1}}</th>
                    <td>{{$produk->nama_tipe}}</td>
                    @if($produk->foto_produk)
                    <td><img src=" {{ asset('/storage/app/public/' . $produk->foto_produk) }} " style="width: 100px; object-fit: cover; border-radius: 50%;"><br>{{$produk->nama_produk}}</td>
                    @else
                    <td><img src="https://images.unsplash.com/photo-1614350292382-c448d0110dfa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80" style="width: 100px; object-fit: cover; border-radius: 50%;"> <br> {{$produk->nama_produk}}</td>
                    @endif
                    <td>{{$produk->detail_komposisi}}</td>
                    <td>{{$produk->harga_produk}}</td>
                    <td>{{$produk->ukuran_kemasan}}</td>
                    <td>
                      <form method="POST" action="dashedit">
                        @csrf
                        <input type="hidden" name="id" value="{{$produk->id}}">
                        <a onclick="this.parentNode.submit();" style="color: blue;">Edit</a>
                      </form>
                      |
                      <a href="/delete/{{$produk->id}}" onclick="return confirm_delete()">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('komponen.admin.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @php
  require_once('public/js/phpjsadmin.php')
  @endphp

</body>

</html>