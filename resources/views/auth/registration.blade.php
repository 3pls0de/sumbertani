<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registrasi Sumber Tani</title>
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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href=".." class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">Sumber Tani</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Sebuah Akun</h5>
                    <p class="text-center small">Buat Akun Admin</p>
                  </div>

                  <form action="/register" method="POST" class="row g-3">
                        @csrf
                        <div class="col-12">
                        <div class="form-floating">
                          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror " id="floatingName" placeholder="Nama" autofocus required value="{{ old('nama') }}" >
                          <label for="floatingName">Nama</label>
                          @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingEmail" placeholder="Email" required value="{{ old('email') }}">
                              <label for="floatingEmail">Email</label>
                              @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
                              <label for="floatingPassword">Password</label>
                              @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                              <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingPasswordConfirmation" placeholder="Konfirmasi Password" required>
                              <label for="floatingPasswordConfirmation">Konfirmasi Password</label>
                              @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                        </div>

                        <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
                        </div>
                        <div class="col-12">
                          <p class="small mb-0 text-center">Sudah punya akun? <a href="login">Login</a></p>
                        </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @php
  require_once('public/js/phpjsadmin.php')
  @endphp

</body>

</html>