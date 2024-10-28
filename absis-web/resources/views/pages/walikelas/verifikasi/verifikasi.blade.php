@extends('components.layout')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4" >
            <div>
                <h6 class="op-7 mb-2">Aplikasi Absen Siswa</h6>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header">
                    <div class="card-title">Verifikasi</div>
                  </div>
                <div class="card-body">
                    <div class="row">

                        <!-- start profil -->
                        <div class="card col-3 col-md-3 border mx-3" style="height:150px; ">
                            <div class="profile d-flex align-items-center">
                                <img src="img/jm_denis.jpg" class="ms-1 my-4" style="height: 100px;">
                            <div class="ms-4 text-center">
                                <b class="fw-bold ms-4" style="font-size: 20px;">Afriza</b><br>
                                <small class="ms-4">XII RPL</small>
                            </div>
                            </div>
                        </div>
                        <!-- end profil -->

                        <!-- start persentase  -->
                        <div class="col-8 col-md-8 mx-2 d-flex justify-content-between">
                            
                            <div class="col-12 col-sm-6 col-md-6 col-xl-3 mx-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5><b>Hadir</b></h5>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div
                                                class="progress-bar bg-success w-25"
                                                role="progressbar"
                                                aria-valuenow="25"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="text-muted mb-0"></p>
                                            <p class="text-muted mb-0">25%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-xl-3 mx-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5><b>Izin</b></h5>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div
                                                class="progress-bar bg-warning w-25"
                                                role="progressbar"
                                                aria-valuenow="25"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="text-muted mb-0"></p>
                                            <p class="text-muted mb-0">25%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-xl-3 mx-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5><b>Sakit</b></h5>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div
                                                class="progress-bar bg-warning w-25"
                                                role="progressbar"
                                                aria-valuenow="25"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="text-muted mb-0"></p>
                                            <p class="text-muted mb-0">25%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-xl-3 mx-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5><b>Alpa</b></h5>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div
                                                class="progress-bar bg-danger w-25"
                                                role="progressbar"
                                                aria-valuenow="25"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="text-muted mb-0"></p>
                                            <p class="text-muted mb-0">25%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end persentase  -->
                    </div>    
                            
                    <!-- start tombol konfirmasi -->
                        <div class="row">
                            <div class="col-3 col-sm-3 ms-4">
                                <a href="{{ route('pages.verifikasi.antriverifikasi') }}" class="btn btn-primary my-2" style="width: 225px;">Setuju</a><br>
                                <a href="{{ route('pages.verifikasi.antriverifikasi') }}" class="btn btn-danger" style="width: 225px;">Tidak Setuju</a>
                            </div>
                    <!-- end tombol konfirmasi -->

                    <!-- start upload image  -->
                            <div class="card border col-8 ms-5 d-flex justify-content-center align-items-center" style="height: 150px;">
                                <h1>Upload Image</h1>
                            </div>
                    <!-- end upload image -->
                        </div>       

                        

                        
                    
                </div>
            </div>
        </div>      
    </div>
</div>
@endsection



            