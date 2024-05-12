@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
        <section class="content">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-12">
                    <!-- Carousel Slider Only Slide -->
                    <div class="box">
                        {{-- <div class="box-header with-border">
                            <h4 class="box-title">Carousel Slider with Indicators </h4>
                        </div> --}}
                        <div class="box-body">
                            <div id="carousel-example-generic-Indicators" class="carousel slide" data-bs-ride="carousel"> 
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#carousel-example-generic-Indicators" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#carousel-example-generic-Indicators" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#carousel-example-generic-Indicators" data-bs-slide-to="2"></li>
                                </ol>                 
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="{{ asset('') }}assets/images/img3.jpg" style="width: 100%;max-height:50%" alt="slide-1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('') }}assets/images/img1.jpg" style="width: 100%;max-height:50%" alt="slide-2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('') }}assets/images/img2.jpg" style="width: 100%;max-height:50%" alt="slide-3">
                                </div>
                                </div>
                            </div>               
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-12 d-flex justify-content-center">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-6">
                            <a href="{{ url('pendaftaran') }}">
                                <div class="box">
                                    <div class="box-body text-center">
                                        <div class="bg-primary-light rounded10 p-20 mx-auto w-100 h-100">
                                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/svg-icon/medical/icon-1.svg" class="" alt="" />
                                        </div>
                                        <p class="text-fade mt-15 mb-5">Pendaftaran</p>
                                        <h2 class="mt-0">1,548</h2>
                                    </div>
                                </div>
                            </a>
                        </div>						
                        <div class="col-xl-3 col-md-6 col-6">
                            <a href="#">
                                <div class="box">
                                    <div class="box-body text-center">
                                        <div class="bg-danger-light rounded10 p-20 mx-auto w-100 h-100">
                                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/svg-icon/medical/icon-2.svg" class="" alt="" />
                                        </div>
                                        <p class="text-fade mt-15 mb-5">Riwayat</p>
                                        <h2 class="mt-0">448</h2>
                                    </div>
                                </div>
                            </a>					
                        </div>						
                        <div class="col-xl-3 col-md-6 col-6">
                            <a href="{{ url('farmasi') }}">
                                <div class="box">
                                    <div class="box-body text-center">
                                        <div class="bg-warning-light rounded10 p-20 mx-auto w-100 h-100">
                                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/svg-icon/medical/icon-3.svg" class="" alt="" />
                                        </div>
                                        <p class="text-fade mt-15 mb-5">Farmasi</p>
                                        <h2 class="mt-0">848</h2>
                                    </div>
                                </div>
                            </a>
                        </div>						
                        <div class="col-xl-3 col-md-6 col-6">
                            <a href="#">
                                <div class="box">
                                    <div class="box-body text-center">
                                        <div class="bg-info-light rounded10 p-20 mx-auto w-100 h-100">
                                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/svg-icon/medical/icon-4.svg" class="" alt="" />
                                        </div>
                                        <p class="text-fade mt-15 mb-5">Cek Bed</p>
                                        <h2 class="mt-0">3,100</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 col-6">
                            <a href="#">
                                <div class="box">
                                    <div class="box-body text-center">
                                        <div class="bg-primary-light rounded10 p-20 mx-auto w-100 h-100">
                                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/svg-icon/medical/icon-1.svg" class="" alt="" />
                                        </div>
                                        <p class="text-fade mt-15 mb-5">Hasil</p>
                                        <h2 class="mt-0">1,548</h2>
                                    </div>
                                </div>
                            </a>
                        </div>						
                        <div class="col-xl-3 col-md-6 col-6">
                            <a href="#">
                                <div class="box">
                                    <div class="box-body text-center">
                                        <div class="bg-danger-light rounded10 p-20 mx-auto w-100 h-100">
                                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/svg-icon/medical/icon-2.svg" class="" alt="" />
                                        </div>
                                        <p class="text-fade mt-15 mb-5">Promo</p>
                                        <h2 class="mt-0">448</h2>
                                    </div>
                                </div>
                            </a>
                        </div>						
                        <div class="col-xl-3 col-md-6 col-6">
                            <a href="#">
                                <div class="box">
                                    <div class="box-body text-center">
                                        <div class="bg-warning-light rounded10 p-20 mx-auto w-100 h-100">
                                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/svg-icon/medical/icon-3.svg" class="" alt="" />
                                        </div>
                                        <p class="text-fade mt-15 mb-5">Layanan</p>
                                        <h2 class="mt-0">848</h2>
                                    </div>
                                </div>
                            </a>
                        </div>						
                        
                    </div>			
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="box">
                      <div class="card-body bg-img py-70" style="background-image: url({{ asset('') }}assets/images/gallery/thumb/5.jpg)" data-overlay="5">
                        <blockquote class="blockquote blockquote-inverse no-border no-margin">
                          <p class="fs-22">Donec vitae leo dignissim, sodales purus et, egestas est.</p>
                          <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                      </div>
    
                      <div class="box-body">
                        <h4><a href="#">Aenean venenatis arcu quis ante porttitor bibendum.</a></h4>
                        <p>October 19, 2019</p>
    
                        <p>Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod.</p>
    
                        <div class="flexbox align-items-center mt-3">
                          <a class="btn btn-sm btn-bold btn-primary" href="#">Read more</a>
    
                          <div class="gap-items-4">
                            <a class="text-muted" href="#">
                              <i class="fa fa-heart me-1"></i> 15
                            </a>
                            <a class="text-muted" href="#">
                              <i class="fa fa-comment me-1"></i> 3
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                      <div class="card-body bg-img py-70" style="background-image: url({{ asset('') }}assets/images/gallery/thumb/5.jpg)" data-overlay="5">
                        <blockquote class="blockquote blockquote-inverse no-border no-margin">
                          <p class="fs-22">Donec vitae leo dignissim, sodales purus et, egestas est.</p>
                          <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                      </div>
    
                      <div class="box-body">
                        <h4><a href="#">Aenean venenatis arcu quis ante porttitor bibendum.</a></h4>
                        <p>October 19, 2019</p>
    
                        <p>Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod.</p>
    
                        <div class="flexbox align-items-center mt-3">
                          <a class="btn btn-sm btn-bold btn-primary" href="#">Read more</a>
    
                          <div class="gap-items-4">
                            <a class="text-muted" href="#">
                              <i class="fa fa-heart me-1"></i> 15
                            </a>
                            <a class="text-muted" href="#">
                              <i class="fa fa-comment me-1"></i> 3
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>			
        </section>
      <!-- /.content -->
    </div>
</div>
@endsection