@extends('layouts.app')

@section('title', 'Edit Register')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Register</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Registers</a></div>
                    <div class="breadcrumb-item">Edit Register</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('register.update', $register) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Register</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>NAMA IBU</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                    is-invalid
                                @enderror"
                                    name="nama" value="{{ $register->nama }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>NO KTP IBU</label>
                                <input type="ktp"
                                    class="form-control @error('ktp')
                                    is-invalid
                                @enderror"
                                    name="ktp" value="{{ $register->ktp }}">
                                @error('ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>TANGGAL LAHIR IBU</label>
                                <input type="tanggal"
                                    class="form-control @error('tanggal')
                                    is-invalid
                                @enderror"
                                    name="tanggal" value="{{ $register->tanggal }}">
                                @error('tanggal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>AGAMA</label>
                                <input type="agama"
                                    class="form-control @error('agama')
                                    is-invalid
                                @enderror"
                                    name="agama" value="{{ $register->agama }}">
                                @error('agama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>PENDIDIKAN IBU</label>
                                <input type="pendidikan"
                                    class="form-control @error('pendidikan')
                                    is-invalid
                                @enderror"
                                    name="pendidikan" value="{{ $register->pendidikan }}">
                                @error('pendidikan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>PEKERJAAN IBU</label>
                                <input type="pekerjaan"
                                    class="form-control @error('pekerjaan')
                                    is-invalid
                                @enderror"
                                    name="pekerjaan" value="{{ $register->pekerjaan }}">
                                @error('pekerjaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>RANGE PENDAPATAN IBU</label>
                                <input type="pendapatan"
                                    class="form-control @error('pendapatan')
                                    is-invalid
                                @enderror"
                                    name="pendapatan" value="{{ $register->pendapatan }}">
                                @error('pendapatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>PENGHASILAN IBU</label>
                                <input type="penghasilan"
                                    class="form-control @error('penghasilan')
                                    is-invalid
                                @enderror"
                                    name="penghasilan" value="{{ $register->penghasilan }}">
                                @error('penghasilan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>STATUS HIDUP IBU</label>
                                <input type="status"
                                    class="form-control @error('status')
                                    is-invalid
                                @enderror"
                                    name="status" value="{{ $register->status }}">
                                @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>ALAMAT</label>
                                <input type="alamat"
                                    class="form-control @error('alamat')
                                    is-invalid
                                @enderror"
                                    name="alamat" value="{{ $register->alamat }}">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>NO HANDPHONE</label>
                                <input type="no_hp"
                                    class="form-control @error('no_hp')
                                    is-invalid
                                @enderror"
                                    name="no_hp" value="{{ $register->no_hp }}">
                                @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>PROVINSI</label>
                                <input type="provinsi"
                                    class="form-control @error('provinsi')
                                    is-invalid
                                @enderror"
                                    name="provinsi" value="{{ $register->provinsi }}">
                                @error('provinsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>KABUPATEN</label>
                                <input type="kab"
                                    class="form-control @error('kab')
                                    is-invalid
                                @enderror"
                                    name="kab" value="{{ $register->kab }}">
                                @error('kab')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>KECAMATAN</label>
                                <input type="kec"
                                    class="form-control @error('kec')
                                    is-invalid
                                @enderror"
                                    name="kec" value="{{ $register->kec }}">
                                @error('kec')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>KELURAHAN</label>
                                <input type="kel"
                                    class="form-control @error('kel')
                                    is-invalid
                                @enderror"
                                    name="kel" value="{{ $register->kel }}">
                                @error('kel')
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
