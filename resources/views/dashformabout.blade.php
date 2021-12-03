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
      <h1>Tambah Produk</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Form</li>
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
          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">"Tentang"</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="POST" action="dashinabout">
                @csrf

                <div class="col-12">
                  <div class="form-floating">
                    <!-- TinyMCE Editor -->
                    <textarea name="ourstory" class="tinymce-editor">
                      {{ $about->ourstory }}
                    </textarea><!-- End TinyMCE Editor -->
                  </div>
                </div>

                <div class="col-12 pt-3">
                  <div class="form-floating">
                    <textarea name="ourmenu" class="form-control @error('ourmenu') is-invalid @enderror" id="floatingourmenu" placeholder="Temukan Menu Kami" maxlength="251" style="height: 100px;">{{ $about->ourmenu }}</textarea>
                    <label for="floatingourmenu">Temukan Menu Kami</label>
                    @error('ourmenu')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
              <!-- End floating Labels Form -->

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