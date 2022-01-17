@extends('layouts.admin', ['title' => 'Laporan Penjualan'])

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar py-12" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Laporan Penjualan</h1>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card py-12">
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container-xxl">
                            <form action="/laporan-penjualan/pdf">
                                <div class="row px-4">
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label class="required form-label fs-6 fw-bold">Member</label>
                                            <select name="kode_member"
                                                class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-allow-clear="true" data-kt-user-table-filter="role"
                                                data-hide-search="true" data-select2-id="select2-data-10-oj63" tabindex="-1"
                                                aria-hidden="true">
                                                <option data-select2-id="select2-data-12-ix32"></option>
                                                @forelse ($members as $index => $member)
                                                    <option value="{{ $member->kode_member }}">
                                                        {{ $member->kode_member }} -
                                                        {{ $member->nama_member }}</option>
                                                @empty
                                                    <option disabled>Harap Isi data Member</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="start_date" class="required form-label">Tanggal Dari</label>
                                            <input id="start_date" type="date" name="start_date" class="form-control"
                                                placeholder="2000-10-28" autocomplete="false" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="end_date" class="required form-label">Tanggal Sampai</label>
                                            <input id="end_date" type="date" name="end_date" class="form-control"
                                                placeholder="2000-10-28" autocomplete="false" />
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
                                            Export to PDF
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
