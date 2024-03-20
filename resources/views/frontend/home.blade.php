<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" href="{{ asset('frontend/assets/logo kinaya.png') }}" type="image/x-icon" />
<!-- All CSS -->
<link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="{{ url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js') }}" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="{{ url('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css') }}"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="{{ url('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css') }}"/>

<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>
<body>

<nav class="navbar navbar-light bg-light pb-5">
    <div class="container-fluid">
        <img src="{{ asset('frontend/assets/Group 6.png') }}" style="max-width: 100%;" alt="Navbar">
    </div>
</nav>

    <section class="abovefold overflow-hidden">
    <div class="container position-relative">
        <div class="container header">
            <div class="row">
                <div class="col-lg-7 px-md-0 my-auto position-relative">
                    <div class="grid-container">
                        <div class="headline">
                            <img src="{{ asset('frontend/assets/logo kinaya.png') }}" alt="Logo" width="100" height="80" class="d-inline-block align-text-top"> 
                            <div class="text">
                                  Vendor Management Systems <span class="cl-yellow"><br>Kinaya Interior</span>    
                            </div>
                        </div>
                    </div>

                    <div class="img-home mt-4">
                        <img src="{{ asset('frontend/assets/home kinaya.png') }}" alt="home" class="img-fluid">
                    </div>
                    <div class="row four-point">
                        <div class="col-md-6">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/Vector.png"
                                alt="vector" class="me-3"> Licensed & Regulated
                        </div>
                        <div class="col-md-6">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/Vector.png"
                                alt="vector" class="me-3"> Hassle-free
                        </div>
                        <div class="col-md-6">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/Vector.png"
                                alt="vector" class="me-3"> 100% Transparent
                        </div>
                        <div class="col-md-6">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/Vector.png"
                                alt="vector" class="me-3"> Across 180+ Countries
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-md-0">
                    <div class="card">
                        <div class="sub-headline mb-4">
                            Welcome to Kinaya Interior
                            <br>
                            Please Sign In
                        </div>
                        <div class="input-group mb-4">
                            <label for="input" class="w-100">
                                <span class="input-title">Email</span>
                                <input type="text" class="form-control mt-2" placeholder="Email@example.org">
                            </label>
                        </div>
                        <div class="input-group mb-4">
                            <label for="input" class="w-100">
                                <span class="input-title">Password</span>
                                <input type="text" class="form-control mt-2" placeholder="Your Password">
                            </label>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-card flex-grow-1 me-2">Sign In</button>
                            <button type="button" class="btn btn-card-dark flex-grow-1 ms-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Register</button>
                        </div>
                        <div class="row mx-0 mt-4 menu">
                            <div class="col-12 px-0">
                                <a href="{{ route('home') }}" class="text-decoration-none">
                                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/Vector.png"
                                    alt="vector" class="me-3">Manual Book
                                </a>
                            </div>
                        </div>
                        <div class="row mx-0 menu">
                            <div class="col-12 px-0">
                                <a href="{{ route('testimoni') }}" class="text-decoration-none">
                                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/Vector.png"
                                    alt="vector" class="me-3">Testimoni Vendor
                                </a>
                            </div>
                        </div>
                        <div class="row mx-0  menu">
                            <div class="col-12 px-0">
                                <a href="{{ route('why-us') }}" class="text-decoration-none">
                                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/Vector.png"
                                    alt="vector" class="me-3">Tentang Kami
                                </a>
                            </div>
                        </div>
                        <div class="row mx-0 mt-4 award">
                            <div class="col-1 px-0">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/award.png"
                                    alt="award" class="img-fluid">
                            </div>
                            <div class="col-11 px-0">
                                Licensed and regulated by The Monetary
                                Authority of Singapore, Hong Kong Customs and Excise Department and Bank Indonesia.
                            </div>
                        </div>

                        @if (Session('success'))
                        <div class="alert alert-success">
                            {{ Session('success') }}
                        </div>
                        @endif
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel2">Register</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <formid="form-vendor" action="{{ route('store') }}"  method="POST" enctype="multipart/form-data">
                                        @csrf
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
                                                        <input type="text" id="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" required/>
                                                    </div>
                                                    <!-- jumlah karyawan input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="text" id="jumlah_karyawan" class="form-control" placeholder="Jumlah Karyawan" required/>
                                                    </div>
                                                    <!-- File Input -->
                                                    <label for="basic-url" class="form-label">Kirim hasil jadi yang pernah dikerjakan</label>
                                                    <div class="input-group mb-4">
                                                        <input type="file" id="hasil_jadi" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                                    </div>
                                                    <label for="basic-url" class="form-label">kirim video Gudang Perusahaan</label>
                                                    <div class="input-group mb-4">
                                                        <input type="file" id="video_perusahaan" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                                    </div>
                                                    <label for="basic-url" class="form-label">Kirim katalog atau pricelist</label>
                                                    <div class="input-group mb-4">
                                                        <input type="file" id="file_katalog" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border-end">
                                                    <h6 class="modal-subtitle mb-4">Info Kontak Perusahaan</h6>
                                                    <!--no telp perusahaan input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="text" id="no_telp_perusahaan" class="form-control" placeholder="No Telpon Perusahaan" required/>
                                                    </div>
                                                    <!-- email perusahaan input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="email" id="email_perusahaan" class="form-control" placeholder="Email Perusahaan" required/>
                                                    </div>
                                                    <!-- sosmed perusahaan input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="text" id="sosmed_perusahaan" class="form-control" placeholder="Sosial Media Perusahaan"/>
                                                    </div>
                                                    <!-- alamat perusahaan input -->
                                                    <div class="form-outline mb-4">
                                                        <textarea class="form-control" id="alamat_perusahaan" rows="3" placeholder="Alamat Perusahaan" required></textarea>
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
                                                        <input type="text" id="name" class="form-control" placeholder="Nama" required/>
                                                    </div>
                                                    <!-- no telp PIC input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="text" id="no_telp" class="form-control" placeholder="No Telpon" required/>
                                                    </div>
                                                    <!-- email PIC input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="email" id="email" class="form-control" placeholder="Email" required/>
                                                    </div>
                                                    <!-- Password PIC input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="password" id="password" class="form-control" placeholder="Password" required/>
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
        </div>
    </div>
    </section>

    <!-- jQuery -->
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="{{ url('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js') }}"></script>

    <!-- Script -->
    <script src="{{ asset('frontend/js/script.js') }}"></script>

</body>
</html>