@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row fx-element-overlay">
                @foreach ($obat as $item)
                    <div class="col-12 col-lg-3 col-xl-3 col-sm-12">
                        <div class="box">
                            <div class="fx-card-item">
                                <div class="fx-card-avatar fx-overlay-1">
                                    <img src="{{ $item['foto'] }}" alt="user" class="bbsr-0 bber-0" />
                                    <div class="fx-overlay scrl-up">
                                        <ul class="fx-info">
                                            <li>
                                                <a class="btn btn-outline image-popup-vertical-fit" href="{{ $item['foto'] }}"><i class="mdi mdi-magnify"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-outline" href="javascript:void(0);"><i class="mdi mdi-delete"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-outline" href="javascript:void(0);"><i class="mdi mdi-settings"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fx-card-content text-start">
                                    <div class="product-text">
                                        <h2 class="pro-price text-blue">Rp. {{ number_format($item['harga']) }}</h2>
                                        <h4 class="box-title mb-0">{{ $item['nama_obat'] }} <br> <span style="font-size: 1rem;">{{ $item['golongan'] }}</span></h4><span class="text-danger" style="font-size: 1rem;">{{ $item['dosis'] }}</span><br>
                                        <small class="text-muted db">{{ $item['deskripsi'] }}</small>
                                    </div>
                                    <div class="mx-auto text-center mt-4">
                                        <a href="{{ url('checkout/'.$item['id']) }}" class="btn btn-info btn-sm text-white">Beli</a>
                                        {{-- <a href="javascript:void(0);" class="btn btn-primary btn-sm text-white">Keranjang</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                @endforeach
            </div>
        </section>        
    </div>
</div>
@endsection