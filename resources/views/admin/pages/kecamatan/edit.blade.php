@extends('layouts.admin', ['title' => 'Edit Kecamatan'])

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar py-12" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Edit Kecamatan</h1>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                @if ($errors->any())
                    <div class="container py-8 alert alert-danger">
                        <div class="d-flex flex-column">
                            <h4 class="mb-4 text-dark">Oops, ada masalah!</h4>
                            @foreach ($errors->all() as $error)
                                <span class="mb-2">{{ $error }}</span>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="card py-10">
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container-xxl">
                            <form action="{{ route('kecamatan.update', $kecamatan->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row px-4">
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label class="required form-label fs-6 fw-bold">Kota</label>
                                            <select name="kode_kota"
                                                class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-allow-clear="true" data-kt-user-table-filter="role"
                                                data-hide-search="true" data-select2-id="select2-data-10-oj63" tabindex="-1"
                                                aria-hidden="true">
                                                <option data-select2-id="select2-data-12-ix32"></option>
                                                @forelse ($kotas as $index => $kota)
                                                    <option value="{{ $kota->kode_kota }}"
                                                        selected={{ $kota->kode_kota === $kecamatan->kode_kota ? 'true' : 'false' }}>
                                                        {{ $kota->kode_kota }} -
                                                        {{ $kota->nama_kota }}</option>
                                                @empty
                                                    <option disabled>Harap Isi data Kota</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="kode_kecamatan" class="required form-label">Kode Kecamatan</label>
                                            <input id="kode_kecamatan" minlength="10" maxlength="16" type="text"
                                                name="kode_kecamatan" class="form-control" placeholder="001"
                                                value="{{ $kecamatan->kode_kecamatan }}" autocomplete="false" disabled />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="nama_kecamatan" class="required form-label">Nama Kecamatan</label>
                                            <input id="nama_kecamatan" type="text" name="nama_kecamatan"
                                                class="form-control" placeholder="Baleendah"
                                                value="{{ $kecamatan->nama_kecamatan }}" autocomplete="false" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                        transform="rotate(-90 11.364 20.364)" fill="black">
                                                    </rect>
                                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black">
                                                    </rect>
                                                </svg>
                                            </span>
                                            Update Data Kecamatan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
