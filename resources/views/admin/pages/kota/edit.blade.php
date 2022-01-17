@extends('layouts.admin', ['title' => 'Edit Kota'])

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar py-12" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Edit Kota</h1>
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
                            <form action="{{ route('kota.update', $kota->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row px-4">
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label class="required form-label fs-6 fw-bold">Provinsi</label>
                                            <select name="kode_provinsi"
                                                class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-allow-clear="true" data-kt-user-table-filter="role"
                                                data-hide-search="true" data-select2-id="select2-data-10-oj63" tabindex="-1"
                                                aria-hidden="true">
                                                <option data-select2-id="select2-data-12-ix32"></option>
                                                @forelse ($provinsis as $index => $provinsi)
                                                    <option value="{{ $provinsi->kode_provinsi }}"
                                                        selected={{ $provinsi->kode_provinsi === $kota->kode_provinsi ? 'true' : 'false' }}>
                                                        {{ $provinsi->kode_provinsi }} -
                                                        {{ $provinsi->nama_provinsi }}</option>
                                                @empty
                                                    <option disabled>Harap Isi data Provinsi</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="kode_kota" class="required form-label">Kode Kota</label>
                                            <input id="kode_kota" minlength="10" maxlength="16" type="text" name="kode_kota"
                                                class="form-control" placeholder="001" value="{{ $kota->kode_kota }}"
                                                autocomplete="false" disabled />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="nama_kota" class="required form-label">Nama Kota</label>
                                            <input id="nama_kota" type="text" name="nama_kota" class="form-control"
                                                placeholder="Bandung" value="{{ $kota->nama_kota }}"
                                                autocomplete="false" />
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
                                            Update Data Kota
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
