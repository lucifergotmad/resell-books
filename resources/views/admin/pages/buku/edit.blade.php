@extends('layouts.admin', ['title' => 'Edit Buku'])

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar py-12" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Edit Buku</h1>
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
                            <form action="{{ route('buku.update', $buku->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row px-4">
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="kode_buku" class="required form-label">Kode
                                                Buku</label>
                                            <input id="kode_buku" type="text" name="kode_buku" class="form-control"
                                                placeholder="BK-000001" autocomplete="false"
                                                value="{{ $buku->kode_buku }}" disabled />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="judul_buku" class="required form-label">Judul
                                                Buku</label>
                                            <input id="judul_buku" type="text" name="judul_buku" class="form-control"
                                                placeholder="Laskar Pelangi" autocomplete="false"
                                                value="{{ $buku->judul_buku }}" disabled />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="pengarang" class="required form-label">Pengarang</label>
                                            <input id="pengarang" type="date" name="pengarang" class="form-control"
                                                placeholder="2000-10-28" autocomplete="false"
                                                value="{{ $buku->pengarang }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="harga_jual" class="required form-label">Harga Jual</label>
                                            <input id="harga_jual" type="number" name="harga_jual" class="form-control"
                                                placeholder="600000" autocomplete="false"
                                                value="{{ $buku->harga_jual }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="harga_sewa" class="required form-label">Harga Sewa</label>
                                            <input id="harga_sewa" type="number" name="harga_sewa" class="form-control"
                                                placeholder="30000" autocomplete="false"
                                                value="{{ $buku->harga_sewa }}" />
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
                                            Update Buku
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
