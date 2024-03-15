@extends('frontend.layouts.main')

@section('title', 'Home')

@section('content')
<section class="abovefold overflow-hidden">
<div class="container position-relative">
    <div class="container header">
        <div class="row">
            <div class="col-lg-7 px-md-0 my-auto position-relative">
                <div class="headline">
                    Vendor Management Systems <span class="cl-yellow"><br>Kinaya Interior</span>
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

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">Register</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form>
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
                                                <!-- kategori perusahaan input -->
                                                <div class="form-outline mb-4">
                                                    <select id="kategori_perusahaan" class="form-select" name="kategori_perusahaan" required>
                                                        <optgroup label="Kategori Perusahaan">
                                                            <option selected disabled hidden>Kategori Perusahaan</option>
                                                            <option>Teknologi Informasi</option>
                                                            <option>Manufaktur</option>
                                                            <option>Jasa Keuangan</option>
                                                            <option>Ritel</option>
                                                            <option>Kesehatan</option>
                                                            <option>Pendidikan</option>
                                                            <option>Pariwisata</option>
                                                            <option>Transportasi</option>
                                                            <option>Agrikultur</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <!-- nama perusahaan input -->
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border-end">
                                                <h6 class="modal-subtitle mb-4">Info Kontak Perusahaan</h6>
                                                <!--no telp perusahaan input -->
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="no_telp_perusahaan" class="form-control" placeholder="No Telpon Perusahaan"/>
                                                </div>
                                                <!-- email perusahaan input -->
                                                <div class="form-outline mb-4">
                                                    <input type="email" id="email_perusahaan" class="form-control" placeholder="Email Perusahaan"/>
                                                </div>
                                                <!-- alamat perusahaan input -->
                                                <div class="form-outline mb-4">
                                                    <textarea class="form-control" id="alamat_perusahaan" rows="3" placeholder="Alamat Perusahaan"></textarea>
                                                  </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h6 class="modal-subtitle mb-4">Info PIC</h6>
                                                <!-- Name PIC input -->
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="name" class="form-control" placeholder="Nama"/>
                                                </div>
                                                <!-- no telp PIC input -->
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="no_telp" class="form-control" placeholder="No Telpon"/>
                                                </div>
                                                <!-- email PIC input -->
                                                <div class="form-outline mb-4">
                                                    <input type="email" id="email" class="form-control" placeholder="Email"/>
                                                </div>
                                                <!-- Password PIC input -->
                                                <div class="form-outline mb-4">
                                                    <input type="password" id="password" class="form-control" placeholder="Password"/>
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


@endsection
