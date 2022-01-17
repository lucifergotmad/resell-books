@extends('layouts.admin', ['title' => 'Edit Rekening'])

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar py-12" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Edit Rekening</h1>
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
                            <form action="{{ route('rekening.update', $rekening->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row px-4">
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label class="required form-label fs-6 fw-bold">Bank</label>
                                            <select name="kode_bank"
                                                class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-allow-clear="true" data-kt-user-table-filter="role"
                                                data-hide-search="true" data-select2-id="select2-data-10-oj63" tabindex="-1"
                                                aria-hidden="true">
                                                <option data-select2-id="select2-data-12-ix32"></option>
                                                @forelse ($banks as $index => $bank)
                                                    <option value="{{ $bank->kode_bank }}"
                                                        selected={{ $bank->kode_bank === $rekening->kode_bank ? 'true' : 'false' }}>
                                                        {{ $bank->kode_bank }} -
                                                        {{ $bank->nama_bank }}</option>
                                                @empty
                                                    <option disabled>Harap Isi data Bank</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="no_rekening" class="required form-label">No Rekening</label>
                                            <input id="no_rekening" minlength="10" maxlength="16" type="text"
                                                name="no_rekening" class="form-control" placeholder="3761122612"
                                                value="{{ $rekening->no_rekening }}" autocomplete="false" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="atas_nama" class="required form-label">Atas Nama</label>
                                            <input id="atas_nama" type="text" name="atas_nama" class="form-control"
                                                placeholder="Octyo Paswa Putra" value="{{ $rekening->atas_nama }}"
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
                                            Update Data Rekening
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
