@extends('layouts.app')

@section('title', 'Edit Biodata')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Biodata</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Biodata</a></div>
                    <div class="breadcrumb-item">Edit Biodata</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('databio.update', $databio) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Biodata</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Jumlah Saudara Masih Sekolah SD</label>
                                <input type="text"
                                    class="form-control @error('jumlah_sd')
                                    is-invalid
                                @enderror"
                                    name="jumlah_sd" value="{{ $databio->jumlah_sd }}">
                                @error('jumlah_sd')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jumlah Saudara Masih Sekolah SMP</label>
                                <input type="jumlah_smp"
                                    class="form-control @error('jumlah_smp')
                                    is-invalid
                                @enderror"
                                    name="jumlah_smp" value="{{ $databio->jumlah_smp }}">
                                @error('jumlah_smp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jumlah Saudara Masih Sekolah SMA</label>
                                <input type="jumlah_sma"
                                    class="form-control @error('jumlah_sma')
                                    is-invalid
                                @enderror"
                                    name="jumlah_sma" value="{{ $databio->jumlah_sma }}">
                                @error('jumlah_sma')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jumlah Saudara Masih Kuliah</label>
                                <input type="jumlah_kuliah"
                                    class="form-control @error('jumlah_kuliah')
                                    is-invalid
                                @enderror"
                                    name="jumlah_kuliah" value="{{ $databio->jumlah_kuliah }}">
                                @error('jumlah_kuliah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tagihan PDAM</label>
                                <input type="pdam"
                                    class="form-control @error('pdam')
                                    is-invalid
                                @enderror"
                                    name="pdam" value="{{ $databio->pdam }}">
                                @error('pdam')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tagihan PLN</label>
                                <input type="pln"
                                    class="form-control @error('pln')
                                    is-invalid
                                @enderror"
                                    name="pln" value="{{ $databio->pln }}">
                                @error('pln')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Status Rumah</label>
                                <input type="rumah"
                                    class="form-control @error('rumah')
                                    is-invalid
                                @enderror"
                                    name="rumah" value="{{ $databio->rumah }}">
                                @error('rumah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Daya PLN</label>
                                <input type="daya_pln"
                                    class="form-control @error('daya_pln')
                                    is-invalid
                                @enderror"
                                    name="daya_pln" value="{{ $databio->daya_pln }}">
                                @error('daya_pln')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Ikut Beasiswa KIP-Kuliah</label>
                                <input type="beasiswa"
                                    class="form-control @error('beasiswa')
                                    is-invalid
                                @enderror"
                                    name="beasiswa" value="{{ $databio->beasiswa }}">
                                @error('beasiswa')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
