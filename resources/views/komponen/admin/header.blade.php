  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href=".." class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Sumber Tani</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
      Hai {{ ucwords(strtok(auth()->user()->nama, " ")) }}, selamat datang kembali
    </div><!-- End Logo -->

  </header><!-- End Header -->