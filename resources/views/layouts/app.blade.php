<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{ asset('favicon.png') }}"
    />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link
      href="{{ asset('css/all.min.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jqvmap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/prism-vs.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />



    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/azia.css') }}" rel="stylesheet">
    
    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashforge.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashforge.customs.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/skin.light.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />

</head>
<body>
    <div id="app">
        <aside class="aside aside-fixed">
      <div class="aside-header">
        <a
          href="../../index.html"
          class="tx-montserrat tx-semibold tx-18 aside-logo"
          >myITS Vaksin</a
        >
        <a href="" class="aside-menu-link">
          <i data-feather="menu"></i>
          <i data-feather="x"></i>
        </a>
      </div>
      <div class="aside-body">
        <ul class="nav nav-aside">
          <li class="nav-item">
            <a href="../beranda/index-admin.html" class="nav-link"
              ><i data-feather="home"></i> <span>Beranda</span></a
            >
          </li>
          <li class="nav-label mg-t-15">Kelola</li>
          <li class="nav-item">
            <a href="../admin/vaksinasi.html" class="nav-link"
              ><i data-feather="calendar"></i> <span>Jadwal Vaksinasi</span></a
            >
          </li>
          <li class="nav-item">
            <a href="../admin/laporan.html" class="nav-link"
              ><i data-feather="clipboard"></i> <span>Laporan</span></a
            >
          </li>
          <li class="nav-label mg-t-15">Data</li>
          <li class="nav-item">
            <a href="../admin/pegawai.html" class="nav-link"
              ><i data-feather="user"></i> <span>Pegawai</span></a
            >
          </li>
          <li class="nav-item">
            <a href="{{ route('vaksinator') }}" class="nav-link"
              ><i data-feather="users"></i> <span>Vaksinator</span></a
            >
          </li>
          <li class="nav-item">
            <a href="{{ route('jenis-vaksin') }}" class="nav-link"
              ><i data-feather="copy"></i> <span>Jenis Vaksin</span></a
            >
          </li>
        </ul>
      </div>
    </aside>

    <div class="content ht-100v pd-0" style="position: relative">
      <div
        class="
          content-header
          align-items-center
          justify-content-start
          pos-fixed
          wd-100p
          z-index-10
        "
      >
        <div>
          <a
            href="../../index.html"
            class="tx-montserrat tx-semibold tx-18 d-lg-none"
            >myITS Vaksin</a
          >
        </div>
        <nav class="nav r-25 pos-fixed z-index-10">
          <div class="dropdown dropdown-profile allow-focus">
            <a
              href=""
              class="dropdown-link"
              data-toggle="dropdown"
              data-display="static"
              aria-expanded="false"
            >
              <div class="avatar avatar-sm">
                <img
                  src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                  class="rounded-circle"
                  alt=""
                />
              </div>
            </a>
            @guest @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}"
                >{{ __('Login') }}</a
              >
            </li>
            @endif @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}"
                >{{ __('Register') }}</a
              >
            </li>
            @endif @else
            <!-- template -->
            <div class="dropdown-menu dropdown-menu-right allow-focus">
              <h5 class="tx-medium tx-montserrat mg-b-5">Nama</h5>
              <p class="mg-b-25 tx-13 tx-color-03">NRP/NIP</p>
              <a
                href=""
                class="dropdown-item"
                data-toggle="modal"
                data-target="#chgRoleUser"
                data-animation="effect-scale"
              >
                <i data-feather="users"></i>Ganti hak akses
              </a>
              <a href="" class="dropdown-item ht-30"
                ><i data-feather="home"></i>myITS SSO</a
              >
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button
                  type="submit"
                  class="dropdown-item ht-30"
                  ><i data-feather="log-out"></i>Keluar</button>
              </form>
            </div>
            @endguest
          </div>
        </nav>
      </div>

      <div
        class="modal fade effect-scale"
        id="chgRoleUser"
        tabindex="-1"
        role="dialog"
        aria-labelledby="chgRoleUserLabel"
        aria-modal="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-white">
            <div class="modal-body">
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
              <h5 class="tx-montserrat tx-medium" id="chgRoleUserLabel">
                Hak Akses
              </h5>
              <p class="tx-color-02">Hak akses Anda saat ini: <b>User </b>.</p>
              <select class="form-control" id="menu">
                <option selected="selected">Select One</option>
                <option value="../beranda/index.html">Pegawai</option>
                <option value="../beranda/index-admin.html">Admin</option>
              </select>
              <div class="mg-t-20 d-flex justify-content-end">
                <button
                  type="button"
                  class="btn btn-white tx-montserrat tx-semibold"
                  data-dismiss="modal"
                >
                  Batal
                </button>
                <input
                  class="
                    btn btn-its
                    tx-montserrat tx-semibold
                    mg-l-5 mg-lg-l-10
                  "
                  type="button"
                  id="goBtn"
                  value="Ganti"
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="content-body ht-100p pd-t-80">
        <div class="container pd-x-0" id="content">
          @yield('content')
          <!-- row -->
        </div>
        <!-- container -->
      </div>
    </div>

    <div
      class="modal fade effect-scale"
      id="photoprofil"
      tabindex="-1"
      role="dialog"
      aria-labelledby="photoprofil"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content tx-14 bg-white pd-10">
          <img
            src="https://i-invdn-com.akamaized.net/content/pic583d7c53b21af8b691aac70a6994c4c9.jpg"
            class="rounded-its2 wd-100p mg-b-10"
            alt=""
          />
          <a
            href="https://my.its.ac.id/sso/account"
            class="btn btn-white tx-montserrat tx-semibold"
            target="_blank"
            ><i data-feather="edit" class="wd-10 mg-r-5"></i> Sunting</a
          >
        </div>
      </div>
    </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/js.cookie.js') }}"></script>
    <script src="{{ asset('js/dashforge.js') }}"></script>
    <script src="{{ asset('js/dashforge.aside.js') }}"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!-- Script base -->
    <script>
      //canvas menu
      $(function () {
        "use strict";

        $(".off-canvas-menu").on("click", function (e) {
          e.preventDefault();
          var target = $(this).attr("href");
          $(target).addClass("show");
        });

        $(".off-canvas .close").on("click", function (e) {
          e.preventDefault();
          $(this).closest(".off-canvas").removeClass("show");
        });

        $(document).on("click touchstart", function (e) {
          e.stopPropagation();
          if (!$(e.target).closest(".off-canvas-menu").length) {
            var offCanvas = $(e.target).closest(".off-canvas").length;
            if (!offCanvas) {
              $(".off-canvas.show").removeClass("show");
            }
          }
        });
      });

      //tooltip
      $('[data-toggle="tooltip"]').tooltip();

      //allow focus menu
      $(document).on("click", ".allow-focus", function (e) {
        e.stopPropagation();
      });

      //file name input
      $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this)
          .siblings(".custom-file-label")
          .addClass("selected")
          .html(fileName);
      });

      //script sementara untuk beralih role
      var goBtn = document.getElementById("goBtn");
      var menu = document.getElementById("menu");

      goBtn.onclick = function () {
        window.location = menu.value;
      };
    </script>

    <script>
      $(function () {
        "use strict";

        $('[data-toggle="tooltip"]').tooltip();

        $(".df-example .btn-primary").tooltip({
          template:
            '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
        });

        $(".df-example .btn-secondary").tooltip({
          template:
            '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
        });

        $(".df-example .btn-success").tooltip({
          template:
            '<div class="tooltip tooltip-success" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
        });

        $(".df-example .btn-danger").tooltip({
          template:
            '<div class="tooltip tooltip-danger" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
        });
      });
    </script>


    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

    <script>
      $(function(){
        'use strict'

        $('#example1').DataTable({
          language: {
            searchPlaceholder: 'Cari',
            sSearch: '',
            lengthMenu: '_MENU_ data/halaman',
            emptyTable:         'Tidak ada data yang tersedia pada tabel ini',
            zeroRecords:        'Tidak ditemukan data yang sesuai',
            info:               'Menampilkan _START_ sampai _END_ dari _TOTAL_ entri',
            infoEmpty:          'Menampilkan 0 sampai 0 dari 0 entri',
            infoFiltered:       '(disaring dari _MAX_ entri keseluruhan)',
            paginate: {
                first: "<i class='fas fa-angle-double-left'></i>",
                last: "<i class='fas fa-angle-double-right'></i>",
                previous: "<i class='fas fa-angle-left'></i>",
                next: "<i class='fas fa-angle-right'></i>"
            },
          }
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
</body>
</html>
