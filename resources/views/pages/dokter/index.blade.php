@extends('layouts.main')

@section('content')
<div class="content-wrapper" style="min-height: 618px;">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Doctors</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                @foreach ($dokter as $item)
                    <div class="col-12 col-lg-3 col-sm-12">
                        <div class="box">
                            <div class="box-header no-border p-0">
                                <a href="#">
                                    <img class="img-fluid" src="{{ $item['foto'] }}" alt="" />
                                </a>
                            </div>
                            <div class="box-body">
                                <div class="text-center">
                                    {{-- <div class="user-contact list-inline text-center">
                                        <a href="#" class="btn btn-circle mb-5 btn-facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn btn-circle mb-5 btn-instagram"><i class="fa fa-instagram"></i></a>
                                        <a href="#" class="btn btn-circle mb-5 btn-twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn btn-circle mb-5 btn-warning"><i class="fa fa-envelope"></i></a>
                                    </div> --}}
                                    <h3 class="my-10"><a href="#">{{ $item['nama_dokter'] }}</a></h3>
                                    <h6 class="user-info mt-0 mb-10 text-fade">{{ $item['spesialis'] }}</h6>
                                    <hr>
                                    {{-- Jadwal --}}
                                    <div class="d-flex justify-content-center">
                                            <h6 class="user-info mt-0 mb-10 text-fade">Jadwal Praktek</h6>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        
                                        <div>
                                            @if ($item['jadwal'])
                                            <h6 class="user-info mt-0 mb-10 text-fade">
                                                @foreach ($item['jadwal'] as $hr)
                                                <span class="text-danger">{{ $hr['hari'] }}. </span>
                                                @endforeach
                                            </h6>
                                            @else
                                                <h6 class="user-info mt-0 mb-10 text-fade">Belum Ada Jadwal</h6>
                                            @endif
                                        </div>
                                        {{-- <div>
                                            <h6 class="user-info mt-0 mb-10 text-fade">{{ $item['jadwal']['senin'] }}</h6>
                                            <h6 class="user-info mt-0 mb-10 text-fade">{{ $item['jadwal']['selasa'] }}</h6>
                                            <h6 class="user-info mt-0 mb-10 text-fade">{{ $item['jadwal']['rabu'] }}</h6>
                                            <h6 class="user-info mt-0 mb-10 text-fade">{{ $item['jadwal']['kamis'] }}</h6>
                                            <h6 class="user-info mt-0 mb-10 text-fade">{{ $item['jadwal']['jumat'] }}</h6>
                                            <h6 class="user-info mt-0 mb-10 text-fade">{{ $item['jadwal']['sabtu'] }}</h6>
                                            <h6 class="user-info mt-0 mb-10 text-fade">{{ $item['jadwal']['minggu'] }}</h6>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>

@endsection