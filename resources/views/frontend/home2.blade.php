<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Home | Kinaya Vendor</title>
      <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="icon" href="{{ asset('frontend/assets/logo kinaya.png') }}" type="image/x-icon" />
      <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
      <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
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
                           <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0 mx-auto">
                              <!-- mx-auto untuk menengahkan -->
                              <li class="nav-item active">
                                 <a class="nav-link" href="" onclick="activateNavItem(this)">Beranda</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="" onclick="activateNavItem(this)">Manual Book</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('testimoni') }}" onclick="activateNavItem(this)">Testimoni</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('why-us') }}" onclick="activateNavItem(this)">Kenapa harus bergabung?</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo">
                  <ul class="navbar-nav me-auto mt-2 mt-lg-0 mx-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="" onclick="activateNavItem(this)">Beranda</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="" onclick="activateNavItem(this)">Manual Book</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('testimoni') }}" onclick="activateNavItem(this)">Testimoni</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('why-us') }}" onclick="activateNavItem(this)">Kenapa harus bergabung?</a>
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
                     <h1 class="title-text-big">
                        Selamat Datang Vendor Rekanan <br class="d-lg-block d-none" /> Kinaya Interior
                    </h1>
                    <p class="text-caption">Website Vendor Kinaya Interior bertujuan untuk membantu rekanan mendapatkan informasi resmi mengenai kegiatan pengadaan barang dan jasa Interior </p>
                     <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                        <button class="btn d-inline-flex mb-md-0 btn-try text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                        Daftar Vendor
                        </button>
                        <button type="button" class="btn btn-outline" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/T2Mawloembg?si=7kBwlY566MevBO8x" data-bs-target="#myModal" aria-label="Watch video Company Profile">
                           <div class="d-flex align-items-center">
                              <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z" fill="#555B61" />
                              </svg>
                              Lihat Vidoe Company Profile
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
      <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
         <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
            .content-2-1 .btn:focus,
            .content-2-1 .btn:active {
            outline: none !important;
            }
            .content-2-1 .title-text {
            padding-top: 5rem;
            margin-bottom: 3rem;
            }
            .content-2-1 .text-title {
            font: 600 2.25rem/2.5rem Poppins, sans-serif;
            color: #121212;
            margin-bottom: 0.625rem;
            }
            .content-2-1 .text-caption {
            color: #121212;
            font-weight: 300;
            }
            .content-2-1 .column {
            padding: 2rem 2.25rem;
            }
            .content-2-1 .icon {
            margin-bottom: 1.5rem;
            }
            .content-2-1 .icon-title {
            font: 500 1.5rem/2rem Poppins, sans-serif;
            margin-bottom: 0.625rem;
            color: #121212;
            }
            .content-2-1 .icon-caption {
            font: 400 1rem/1.625 Poppins, sans-serif;
            letter-spacing: 0.025em;
            color: #565656;
            }
            .content-2-1 .card-block {
            padding: 1rem 1rem 5rem;
            }
            .content-2-1 .card {
            padding: 1.75rem;
            background-color: #fffcf4;
            border-radius: 0.75rem;
            border: 1px solid #DDA226;
            }
            .content-2-1 .card-title {
            font: 600 1.5rem/2rem Poppins, sans-serif;
            margin-bottom: 0.625rem;
            color: #000000;
            }
            .content-2-1 .card-caption {
            font: 300 1rem/1.5rem Poppins, sans-serif;
            color: #565656;
            letter-spacing: 0.025em;
            margin-bottom: 0;
            }
            .content-2-1 .btn-card {
            font: 700 1rem/1.5rem Poppins, sans-serif;
            background-color: #e0aa34;
            padding-top: 1rem;
            padding-bottom: 1rem;
            width: 100%;
            border-radius: 0.75rem;
            margin-bottom: 1.25rem;
            }
            .content-2-1 .btn-card:hover {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .content-2-1 .btn-outline {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            color: #979797;
            border: 1px solid #979797;
            padding-top: 1rem;
            padding-bottom: 1rem;
            width: 100%;
            border-radius: 0.75rem;
            }
            .content-2-1 .btn-outline:hover {
            border: 1px solid #DDA226;
            color: #DDA226;
            }
            .content-2-1 .card-text {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
            }
            .content-2-1 .grid-padding {
            padding: 0rem 1rem 3rem;
            }
            @media (min-width: 576px) {
            .content-2-1 .grid-padding {
            padding: 0rem 2rem 3rem;
            }
            .content-2-1 .card-block {
            padding: 3rem 2rem 5rem;
            }
            }
            @media (min-width: 768px) {
            .content-2-1 .grid-padding {
            padding: 0rem 4rem 3rem;
            }
            .content-2-1 .card-block {
            padding: 3rem 4rem 5rem;
            }
            }
            @media (min-width: 992px) {
            .content-2-1 .grid-padding {
            padding: 1rem 6rem 3rem;
            }
            .content-2-1 .card-block {
            padding: 3rem 6rem 5rem;
            }
            .content-2-1 .column {
            padding: 0rem 2.25rem;
            }
            }
            @media (min-width: 1200px) {
            .content-2-1 .grid-padding {
            padding: 1rem 10rem 3rem;
            }
            .content-2-1 .card-block {
            padding: 3rem 6rem 5rem;
            }
            .content-2-1 .card-btn-space {
            margin-top: 15px;
            margin-bottom: 15px;
            }
            .content-2-1 .btn-outline,
            .content-2-1 .btn-card {
            width: 95%;
            float: right;
            }
            }
            @media (max-width: 980px) {
            .content-2-1 .card-btn-space {
            width: 100%;
            }
            }
         </style>
         <div class="content-2-1 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="text-center title-text">
               <h1 class="text-title">Kenapa bergabung dengan kami</h1>
               <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                  Bergabung dengan kami sebagai vendor atau mitra kerja sama adalah keputusan yang tepat untuk mewujudkan visi dan misi bisnis Anda. Kami berkomitmen untuk menyediakan platform yang mendukung kolaborasi yang kuat dan saling menguntungkan. Dengan bergabung bersama kami, Anda akan merasakan beberapa manfaat berikut:
               </p>
            </div>
            <div class="grid-padding text-center">
               <div class="row">
                  <div class="col-lg-4 column">
                     <div class="icon">
                        <img src="{{ asset('frontend/assets/people.png') }}" alt="" />
                     </div>
                     <h3 class="icon-title">Dukungan Tim Profesional</h3>
                     <p class="icon-caption">
                        Tim kami terdiri dari profesional berpengalaman yang siap membantu dan mendukung Anda dalam mencapai tujuan bisnis Anda.
                     </p>
                  </div>
                  <div class="col-lg-4 column">
                     <div class="icon">
                        <img src="{{ asset('frontend/assets/money.png') }}" alt="" />
                     </div>
                     <h3 class="icon-title">Jaringan Luas</h3>
                     <p class="icon-caption">
                        Dengan bergabung bersama kami, Anda akan memiliki kesempatan untuk memperluas jaringan Anda dan menjalin kemitraan yang berharga dengan para pemangku kepentingan bisnis lainnya.
                     </p>
                  </div>
                  <div class="col-lg-4 column">
                     <div class="icon">
                        <img src="{{ asset('frontend/assets/percaya.png') }}" alt="" />
                     </div>
                     <h3 class="icon-title">Layanan Terbaik</h3>
                     <p class="icon-caption">
                        Kami berkomitmen untuk memberikan layanan terbaik kepada para mitra kerja sama kami. Dari awal hingga akhir, kami akan bekerja sama dengan Anda untuk memastikan kebutuhan dan harapan Anda terpenuhi dengan baik.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="content-2-1 container-xxl mx-auto  position-relative" style="font-family: 'Poppins', sans-serif">
         <div class="text-center title-text">
            <h1 class="text-title">Testimoni</h1>
            <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
               Testimoni dari para pelanggan kami adalah bukti kepuasan terhadap layanan dan produk yang kami tawarkan. Kami
               bangga melihat bagaimana desain interior dari Kinaya Interior mengubah ruang-ruang menjadi tempat yang
               indah dan nyaman untuk ditempati.
            </p>
         </div>
      </div>
      <div class="owl-carousel owl-theme p-4">
         <div class="card">
            <img src="{{ asset('frontend/img/BBIB SINGOSARI.webp') }}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">BBIB SINGOSARI</h5>
               <p class="card-text">Kegiatan Berita Acara Serah Terima pekerjaan dengan pihak BBIB SINGOSARI</p>
               <p class="card-text"><small class="text-muted">Kinaya Interior</small></p>
            </div>
         </div>
         <div class="card">
            <img src="{{ asset('frontend/img/16 9.webp') }}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">KPP PRATAMA SBY WONOCOLO</h5>
               <p class="card-text">Kegiatan Berita Acara Serah Terima pekerjaan dengan pihak KPP PRATAMA SURABAYA WONOCOLO</p>
               <p class="card-text"><small class="text-muted">Kinaya Interior</small></p>
            </div>
         </div>
         <div class="card">
            <img src="{{ asset('frontend/img/BANK JATIM KANTOR PUSAT.webp') }}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">BANK JATIM PUSAT</h5>
               <p class="card-text">Kegiatan Berita Acara Serah Terima dengan pihak Bank Jatim Pusat untuk Ruang Workstation.</p>
               <p class="card-text"><small class="text-muted">Kinaya Interior</small></p>
            </div>
         </div>
         <div class="card">
            <img src="{{ asset('frontend/img/KPP PRATAMA SBY TEGALSARI.webp') }}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">KPP PRATAMA SBY TEGALSARI</h5>
               <p class="card-text">Kegiatan Berita serah terima pekerjaan dengan pihak KPP PRATAMA SURABAYA TEGALSARI</p>
               <p class="card-text"><small class="text-muted">Kinaya Interior</small></p>
            </div>
         </div>
      </div>
      <div class="d-flex justify-content-center align-items-center pb-4">
         <button class="owl-prev btn btn-warning text-white rounded-circle h-12 w-12 d-flex justify-content-center align-items-center mr-4" type="button">&#10094;</button>
         <button class="owl-next btn btn-warning text-white rounded-circle h-12 w-12 d-flex justify-content-center align-items-center ml-4" type="button">&#10095;</button>
      </div>
      <div class="content-2-1 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
         <div class="card-block">
            <div class="card">
               <div class="d-flex flex-lg-row flex-column align-items-center">
                  <div class="me-lg-3">
                     <img
                        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png"
                        alt="" />
                  </div>
                  <div class="flex-grow-1 text-lg-start text-center card-text">
                     <h3 class="card-title">
                        Mari bergabung dengan kami dan rasakan perbedaannya!
                     </h3>
                     <p class="card-caption">
                        Bersama-sama, kita dapat mencapai kesuksesan yang luar biasa <br class="d-none d-lg-block" />
                        dalam bisnis dan menciptakan hasil yang luar biasa untuk pelanggan kita.
                     </p>
                  </div>
                  <div class="card-btn-space">
                     <button class="btn btn-card text-white">Daftar</button>
                     <button class="btn btn-outline">Video Company Profile</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer starts -->
      <section id="footer">
         <!-- Footer -->
         <footer class="text-center text-lg-start bg-body-tertiary text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            </section>
            <!-- Section: Social media -->
            <!-- Section: Links  -->
            <section class="">
               <div class="container text-center text-md-start mt-5">
                  <!-- Grid row -->
                  <div class="row mt-3">
                     <!-- Grid column -->
                     <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                           <img src="{{ asset('frontend/assets/logo kinaya.png') }}"alt="logo Kinaya" width="80" height="60"/>
                        </h6>
                        <p>
                           Bergabunglah dan menjadi mitra kami dalam menjelajahi ekspansi tanpa batas.
                        </p>
                     </div>
                     <!-- Grid column -->
                     {{-- <!-- Grid column -->
                     <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                           Produk Kami
                        </h6>
                        <p>
                           <a href="{{ route('catalog.category', 1) }}" class="text-reset">Konveksi</a>
                        </p>
                        <p>
                           <a href="{{ route('catalog.category', 4) }}" class="text-reset">Souvenir</a>
                        </p>
                        <p>
                           <a href="{{ route('catalog.category', 3) }}" class="text-reset">ATK</a>
                        </p>
                        <p>
                           <a href="{{ route('catalog.category', 2) }}" class="text-reset">Percetakan</a>
                        </p>
                     </div>
                     --}}
                     <!-- Grid column -->
                     <!-- Grid column -->
                     <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                           Link
                        </h6>
                        <p>
                           <a href="{{ url('/') }}" class="text-reset">Beranda</a>
                        </p>
                        <p>
                           <a href="{{ url('/') }}#partner" class="text-reset">Manual Book</a>
                        </p>
                        <p>
                           <a href="{{ url('/') }}#portofolio" class="text-reset">Testimoni</a>
                        </p>
                        <p>
                           <a href="{{ url('/') }}#about" class="text-reset">Kenapa harus bergabung?</a>
                        </p>
                     </div>
                     <!-- Grid column -->
                     <!-- Grid column -->
                     <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Hubungi Kami</h6>
                        <p>
                           <i class="fas fa-home me-3"></i> Jl. Bangah Jaya Indah XI No.2, Kec. Gedangan Kab Sidoarjo Jawa Timur
                        </p>
                        <p>
                           <i class="fas fa-envelope me-3"></i>official@kinayainterior.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 62 812 1656 6690</p>
                     </div>
                     <!-- Grid column -->
                  </div>
                  <!-- Grid row -->
               </div>
            </section>
            <!-- Section: Links  -->
            <!-- Copyright -->
            <div class="text-center p-4 text-white" style="background-color: #DDA226;">
               © 2024 Copyright:
               <a class="text-reset fw-bold text-white" href="https://tukuklik.com/">Kinaya Interior</a>
            </div>
            <!-- Copyright -->
         </footer>
         <!-- Footer -->
      </section>
      <!-- footer ends -->

      <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
      <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js') }}" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
      <script src="{{ url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js') }}" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
      <script src="{{ asset('frontend/js/script.js') }}"></script>
   </body>
</html>
