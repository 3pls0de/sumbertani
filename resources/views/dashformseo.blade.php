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
              <h5 class="card-title">Floating labels Form</h5>
              <p>Pisahkan dengan tanda koma (,) jika ada lebih dari satu (Author / Kata Kunci / Deskripsi) </p>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="POST" action="dashinseo">
                @csrf
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror " id="floatingauthor" placeholder="Author/Penulis*" required value="{{ $seo->author }}" >
                    <label for="floatingauthor">Author/Penulis*</label>
                    @error('author')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="floatingdescription" placeholder="Deskripsi" maxlength="150" style="height: 100px;">{{ $seo->description }}</textarea>
                    <label for="floatingdescription">Deskripsi</label>
                    @error('description')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea name="keywords" class="form-control @error('keywords') is-invalid @enderror" id="floatingkeywords" placeholder="Kata Kunci" maxlength="150" style="height: 100px;">{{ $seo->keywords }}</textarea>
                    <label for="floatingkeywords">Kata Kunci</label>
                    @error('keywords')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select name="xindex" class="form-select" id="floatingSelect" aria-label="Robots">
                      <option value="1" @if($seo->xindex == 1) selected @endif>Index</option>
                      <option value="0" @if($seo->xindex == 0) selected @endif>No Index</option>
                    </select>
                    <label for="floatingSelect">Robots</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select name="xfollow" class="form-select" id="floatingSelect" aria-label="Robots">
                      <option value="1" @if($seo->xfollow == 1) selected @endif>Follow</option>
                      <option value="0" @if($seo->xfollow == 0) selected @endif>No Follow</option>
                    </select>
                    <label for="floatingSelect">Robots</label>
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