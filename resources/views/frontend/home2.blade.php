<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Home | Kinaya Vendor</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="icon" href="{{ asset('frontend/assets/logo kinaya.png') }}" type="image/x-icon" />
    </head>
    <body>
       <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .header-2-2 .modal-item.modal {
        top: 2rem;
      }

      .header-2-2 .navbar,
      .header-2-2 .hero {
        padding: 3rem 2rem;
      }

      .header-2-2 .navbar-light .navbar-nav .nav-link {
        font: 300 18px/1.5rem Poppins, sans-serif;
        color: #1d1e3c;
        transition: 0.3s;
      }

      .header-2-2 .navbar-light .navbar-nav .nav-link:hover {
        font: 600 18px/1.5rem Poppins, sans-serif;
        color: #1d1e3c;
        transition: 0.3s;
      }

      .header-2-2 .navbar-light .navbar-nav .active>.nav-link,
      .header-2-2 .navbar-light .navbar-nav .nav-link.active,
      .header-2-2 .navbar-light .navbar-nav .nav-link.show,
      .header-2-2 .navbar-light .navbar-nav .show>.nav-link {
        font-weight: 600;
        transition: 0.3s;
      }

      .header-2-2 .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }

      .header-2-2 .btn:focus,
      .header-2-2 .btn:active {
        outline: none !important;
      }

      .header-2-2 .btn-fill {
        font: 600 18px / normal Poppins, sans-serif;
        background-color: #DDA226;
        border-radius: 12px;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-2-2 .btn-fill:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-2-2 .btn-no-fill {
        font: 300 18px/1.75rem Poppins, sans-serif;
        color: #1d1e3c;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-2-2 .modal-item .modal-dialog .modal-content {
        border-radius: 8px;
        transition: 0.3s;
      }

      .header-2-2 .responsive li a {
        padding: 1rem;
        transition: 0.3s;
      }

      .header-2-2 .text-caption {
        font: 600 0.875rem/1.625 Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #DDA226;
      }

      .header-2-2 .left-column {
        margin-bottom: 2.75rem;
        width: 100%;
      }

      .header-2-2 .right-column {
        width: 100%;
      }

      .header-2-2 .title-text-big {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #272e35;
      }

      .header-2-2 .btn-try {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: #DDA226;
        transition: 0.3s;
      }

      .header-2-2 .btn-try:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-2-2 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        border: 1px solid #555b61;
        color: #555b61;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: transparent;
        transition: 0.3s;
      }

      .header-2-2 .btn-outline:hover {
        border: 1px solid #DDA226;
        color: #DDA226;
        transition: 0.3s;
      }

      .header-2-2 .btn-outline:hover div path {
        fill: #DDA226;
        transition: 0.3s;
      }

      @media (min-width: 576px) {
        .header-2-2 .modal-item .modal-dialog {
          max-width: 95%;
          border-radius: 12px;
        }

        .header-2-2 .navbar {
          padding: 3rem 2rem;
        }
/*
        .header-2-2 .hero {
          padding: 3rem 2rem 5rem;
        } */

        .header-2-2 .title-text-big {
          font-size: 3rem;
          line-height: 1.2;
        }
      }

      @media (min-width: 768px) {
        .header-2-2 .navbar {
          padding: 3rem 4rem;
        }

        /* .header-2-2 .hero {
          padding: 3rem 4rem 5rem;
        } */

        .header-2-2 .left-column {
          margin-bottom: 3rem;
        }
      }

      @media (min-width: 992px) {
        .header-2-2 .navbar-expand-lg .navbar-nav .nav-link {
          padding-right: 1.25rem;
          padding-left: 1.25rem;
        }

        .header-2-2 .navbar {
          padding: 3rem 6rem;
        }

        /* .header-2-2 .hero {
          padding: 3rem 6rem 5rem;
        } */

        .header-2-2 .left-column {
          width: 50%;
          margin-bottom: 0;
        }

        .header-2-2 .right-column {
          width: 50%;
        }

        .header-2-2 .title-text-big {
          font-size: 3.5rem;
          line-height: 1.2;
        }
      }
    </style>
    <div class="container-xxl mx-auto p-0  position-relative header-2-2" style="font-family: 'Poppins', sans-serif">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#">
              <img style="margin-right: 0.75rem; height: 50px; width: 70px;"
                src="{{ asset('frontend/assets/logo kinaya.png') }}" alt="" />
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
              aria-labelledby="targetModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-white border-0">
                  <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                    <a class="modal-title" id="targetModalLabel">
                      <img style="margin-top: 0.5rem; height: 37px; width: 50px;"
                        src="{{ asset('frontend/assets/logo kinaya.png') }}"
                        alt="" />
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                    <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0 mx-auto"> <!-- mx-auto untuk menengahkan -->
                      <li class="nav-item active">
                        <a class="nav-link" href="" onclick="activateNavItem(this)">Manual Book</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('testimoni') }}" onclick="activateNavItem(this)">Testimoni</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('why-us') }}" onclick="activateNavItem(this)">Why Us?</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo">
              <ul class="navbar-nav me-auto mt-2 mt-lg-0 mx-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="" onclick="activateNavItem(this)">Manual Book</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('testimoni') }}" onclick="activateNavItem(this)">Testimoni</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('why-us') }}" onclick="activateNavItem(this)">Why Us?</a>
                </li>
              </ul>
            </div>
          </nav>

          <script>
            function activateNavItem(element) {
              // Hapus kelas active dari semua elemen
              const navItems = document.querySelectorAll('.nav-item');
              navItems.forEach(item => {
                item.classList.remove('active');
              });

              // Tambahkan kelas active ke elemen yang diklik
              element.parentNode.classList.add('active');
            }
          </script>


      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div
            class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center ">
            <p class="text-caption">VENDOR MANAGEMENT SYSTEM <br> KINAYA INTERIOR</p>
            <h1 class="title-text-big">
              The best way<br class="d-lg-block d-none" />
              to organize join the interior vendor
            </h1>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
              <button class="btn d-inline-flex mb-md-0 btn-try text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                Register
              </button>
              <button type="button" class="btn btn-outline" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/T2Mawloembg?si=7kBwlY566MevBO8x" data-bs-target="#myModal" aria-label="Watch video Company Profile">
                <div class="d-flex align-items-center">
                    <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z" fill="#555B61" />
                    </svg>
                    Watch video Company Profile
                </div>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Video Company Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="ratio ratio-16x9">
                      <iframe id="videoPlayer" width="560" height="315" src="https://www.youtube.com/embed/T2Mawloembg?si=7kBwlY566MevBO8x" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            </div>
          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-center pe-0">
            <img id="img-fluid" class="h-auto mw-100"
              src= "{{ asset('frontend/assets/home kinaya.png') }}"
              alt="" />
          </div>
          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Register</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <form id="form-vendor" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4 border-end">
                                    <h6 class="modal-subtitle mb-4">Info Perusahaan</h6>
                                    <!-- kategori bidan perusahaan input -->
                                    <div class="form-outline mb-4">
                                        <select id="kategori_bidang_perusahaan" class="form-select" name="kategori_bidang_perusahaan" required>
                                            <optgroup label="Kategori Bidang Perusahaan">
                                            <option selected disabled hidden>Kategori Bidang Perusahaan</option>
                                            <option>Teknologi Informasi</option>
                                            <option>Manufaktur</option>
                                            <option>Jasa Keuangan</option>
                                            <option>Ritel</option>
                                            <option>Kesehatan</option>
                                            <option>Pendidikan</option>
                                            <option>Pariwisata</option>
                                            <option>Transportasi</option>
                                            <option>Agrikultur</option>
                                        </select>

                                    </div>
                                    <!-- nama perusahaan input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="nama_perusahaan" name="nama_perusahaan"  class="form-control" placeholder="Nama Perusahaan" required/>
                                    </div>
                                    <!-- jumlah karyawan input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="jumlah_karyawan" name="jumlah_karyawan" class="form-control" placeholder="Jumlah Karyawan" required/>
                                    </div>
                                    <!-- File Input -->
                                    <label for="basic-url" class="form-label">Kirim hasil jadi yang pernah dikerjakan</label>
                                    <div class="input-group mb-4">
                                        <input type="file" id="hasil_jadi" name="hasil_jadi" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                    </div>
                                    <label for="basic-url" class="form-label">kirim video Gudang Perusahaan</label>
                                    <div class="input-group mb-4">
                                        <input type="file" id="video_perusahaan" name="video_perusahaan" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                    </div>
                                    <label for="basic-url" class="form-label">Kirim katalog atau pricelist</label>
                                    <div class="input-group mb-4">
                                        <input type="file" id="file_katalog" name="file_katalog" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                    </div>
                                </div>
                                <div class="col-md-4 border-end">
                                    <h6 class="modal-subtitle mb-4">Info Kontak Perusahaan</h6>
                                    <!--no telp perusahaan input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="no_telp_perusahaan" name="no_telp_perusahaan" class="form-control" placeholder="No Telpon Perusahaan" required/>
                                    </div>
                                    <!-- email perusahaan input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email_perusahaan" name="email_perusahaan" class="form-control" placeholder="Email Perusahaan" required/>
                                    </div>
                                    <!-- sosmed perusahaan input -->
                                    <div class="form-outline mb-4">
                                    <input type="text" id="sosmed_perusahaan" name="sosmed_perusahaan" class="form-control" placeholder="Social Media Perusahaan" required>
                                    </div>
                                    <!-- alamat perusahaan input -->
                                    <div class="form-outline mb-4">
                                        <textarea class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" rows="3" placeholder="Alamat Perusahaan" required></textarea>
                                    </div>
                                    <!-- Kota pperusahaan -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="kota" name="kota" placeholder="Kota" class="form-control" id="inputKota" required>
                                    </div>
                                    <!-- provinsi -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="provinsi" name="provinsi" placeholder="Provinsi" class="form-control" id="inputProvinsi" required>
                                    </div>
                                    <!-- kode pos -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="kode_pos" name="kode_pos" class="form-control" placeholder="Kode pos" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="modal-subtitle mb-4">Info PIC</h6>
                                    <!-- Name PIC input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Nama" required/>
                                    </div>
                                    <!-- no telp PIC input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="No Telpon" required/>
                                    </div>
                                    <!-- email PIC input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required/>
                                    </div>
                                    <!-- Password PIC input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required/>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <div class="modal-footer justify-content-end">
                                <button type="submit" class="btn btn-dark btn-lg">Register</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
          </div>
          <!-- Modal -->
        </div>
      </div>
    </div>
  </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>
