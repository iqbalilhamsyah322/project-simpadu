@extends('layouts.app')

@section('title', 'Biodata')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Biodatas</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Biodatas</a></div>
                    <div class="breadcrumb-item">All Biodata</div>
                </div>
            </div>
            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Biodata</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('databio.create') }}" class="btn btn-primary">New Biodata</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET", action="{{ route('databio.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>

                                            <th>Jumlah Saudara Masih Sekolah SD</th>
                                            <th>Jumlah Saudara Masih Sekolah SMP</th>
                                            <th>Jumlah Saudara Masih Sekolah SMA</th>
                                            <th>Jumlah Saudara Masih Kuliah</th>
                                            <th>Tagihan PDAM</th>
                                            <th>Tagihan PLN</th>
                                            <th>Status Rumah</th>
                                            <th>Daya PLN</th>
                                            <th>Ikut Beasiswa KIP-Kuliah</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($databios as $databio)
                                            <tr>
                                                <td>
                                                    {{ $databio->jumlah_sd }}
                                                </td>
                                                <td>
                                                    {{ $databio->jumlah_smp }}
                                                </td>
                                                <td>
                                                    {{ $databio->jumlah_sma }}
                                                </td>
                                                <td>
                                                    {{ $databio->jumlah_kuliah }}
                                                </td>
                                                <td>
                                                    {{ $databio->pdam }}
                                                </td>
                                                <td>
                                                    {{ $databio->pln }}
                                                </td>
                                                <td>
                                                    {{ $databio->rumah }}
                                                </td>
                                                <td>
                                                    {{ $databio->daya_pln }}
                                                </td>
                                                <td>
                                                    {{ $databio->beasiswa }}
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('databio.edit', $databio->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>

                                                        <form action="{{ route('databio.destroy', $databio->id) }}" method="POST"
                                                            class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $databios->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
