@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Form Reservasi</h4>
                        </div>
                        <!-- /.box-header -->
                        <form class="form" action="{{ url('pendaftaran/store') }}" method="POST">
                            @csrf
                            <div class="box-body">
                                <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                                <hr class="my-15" />
                                <div class="row">
                                    <div class="col-md-6" id="tipe_pasien">
                                        <div class="form-group">
                                            <label class="form-label">Tipe Pasien</label>
                                            <select name="tipe_pasien" id="" class="form-control">
                                                <option value="" selected disabled> == Pilih == </option>
                                                <option value="tunai">Tunai</option>
                                                <option value="mitra">Mitra</option>
                                                <option value="bpjs">BPJS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 hide" id="tipe_konsultasi">
                                        <div class="form-group">
                                            <label class="form-label">Tipe Konsultasi</label>
                                            <select name="tipe_konsultasi" id="" class="form-control">
                                                <option value="" selected disabled> == Pilih == </option>
                                                <option value="telekonsultasi">Telekonsultasi</option>
                                                <option value="onsite">Onsite</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Tanggal Reservasi</label>
                                            <input type="date" class="form-control" name="waktu_reservasi" required placeholder="First Name" />
                                        </div>
                                    </div>
                                </div>
                                <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Layanan</h4>
                                <hr class="my-15" />
                                <div class="row">
                                    <div class="col-md-6" id="tipe_pemeriksaan">
                                        <div class="form-group">
                                            <label class="form-label">Tipe Pemeriksaan</label>
                                            <select name="tipe_pemeriksaan" id="" class="form-control">
                                                <option value="" selected disabled> == Pilih == </option>
                                                <option value="penunjang">Penunjang</option>
                                                <option value="nonpenunjang">Non Penunjang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 hide" id="kategori_penunjang">
                                        <div class="form-group">
                                            <label class="form-label">Kategori Penunjang</label>
                                            <select name="kategori_penunjang_id" id="" class="form-control">
                                                <option value="" selected disabled> == Pilih == </option>
                                                @foreach ($dataPenunjang as $item)
                                                    <option value="{{ $item['id'] }}">{{ $item['nama_kategori_penunjang'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="form-label">Pilih Dokter</label>
                                            <select name="dokter_id" id="" class="form-control">
                                                <option value="" selected disabled> == Pilih == </option>
                                                {{-- <option value="Dokter A">Dokter A</option> --}}
                                                @foreach ($dataDokter as $item)
                                                    <option value="{{ $item['id'] }}">{{ $item['nama_dokter'] }} - {{ $item['spesialis'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="form-label">Pilih Jam</label>
                                            <input type="time" class="form-control" name="jam" required>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="button" class="btn btn-warning me-1"><i class="ti-trash"></i> Cancel</button>
                                <button type="submit" class="btn btn-primary"><i class="ti-save-alt"></i> Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('select[name="tipe_pasien"]').on('change', function() {
            var tipe_pasien = $(this).val();
            console.log(tipe_pasien);
            if(tipe_pasien == 'tunai') {
                $('#tipe_konsultasi').removeClass('hide');
            } else {
                $('#tipe_konsultasi').addClass('hide');
            }
        });

        $('select[name="tipe_pemeriksaan"]').on('change', function() {
            var tipe_pemeriksaan = $(this).val();
            if(tipe_pemeriksaan == 'penunjang') {
                $('#kategori_penunjang').removeClass('hide');
            } else {
                $('#kategori_penunjang').addClass('hide');
            }
        });
    });
</script>
@endsection