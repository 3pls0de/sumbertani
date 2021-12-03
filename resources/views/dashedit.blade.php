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
      <h1>Edit Produk</h1>
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
          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="POST" action="dashledit" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" class="form-control @error('id') is-invalid @enderror" id="id" placeholder="ID"  value="{{ $dedit->id }}" readonly >
                
                <div class="col-12">
                  <label class=" col-form-label">Pilih Tipe Produk</label>
                  <div class="col-12">
                    <select class="form-select" aria-label="Default select example" name="tipe_produk" required>
                      <option selected value="" placeholder="tipe" disabled>Pilih Tipe Kopi*</option>
                      @foreach($selectors as $tipe)
                        <option value="{{ $tipe->id_tipe }}" @if($tipe->id_tipe == $dedit->tipe_produk) selected @endif>{{ ucwords($tipe->nama_tipe) }}</option>
                      @endforeach
                    </select>
                    @error('tipe_produk')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror " id="floatingnama_produk" placeholder="Nama Produk*" required value="{{ $dedit->nama_produk }}" >
                    <label for="floatingnama_produk">Nama Produk*</label>
                    @error('nama_produk')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea name="detail_komposisi" class="form-control @error('detail_komposisi') is-invalid @enderror" id="floatingdetail_komposisi" placeholder="Detail Produk" maxlength="150" style="height: 100px;">{{ $dedit->detail_komposisi }}</textarea>
                    <label for="floatingdetail_komposisi">Detail Produk</label>
                    @error('detail_komposisi')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <input type="number" name="harga_produk" class="form-control @error('harga_produk') is-invalid @enderror" id="harga_produk" placeholder="Harga Produk*" required value="{{ $dedit->harga_produk }}">
                    <label for="harga_produk">Harga Produk*</label>
                    @error('harga_produk')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" name="ukuran_kemasan" class="form-control @error('ukuran_kemasan') is-invalid @enderror" id="ukuran_kemasan" placeholder="Ukuran Kemasan*" required value="{{ $dedit->ukuran_kemasan }}">
                    <label for="ukuran_kemasan">Ukuran Kemasan*</label>
                    @error('ukuran_kemasan')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                @if(!is_null($dedit->foto_produk) && !empty($dedit->foto_produk))
                  <div class="form-group mb-2">
                    <img src="{{ asset('/storage/app/public/' . $dedit->foto_produk) }}" class="preview">
                  </div>
                @endif
                <div class="col-12">
                  <label for="formFile" class="col-sm-2 col-form-label">Upload Gambar</label>
                  <div class="col-12">
                    <input class="form-control @error('foto_produk') is-invalid @enderror" type="file" id="formFile" name="foto_produk">
                    @error('foto_produk')
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
              </form><!-- End floating Labels Form -->

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