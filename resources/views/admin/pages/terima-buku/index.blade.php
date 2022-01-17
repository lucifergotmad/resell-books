@extends('layouts.admin', ['title' => 'Terima Buku'])

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar py-12" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Terima Buku</h1>
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

                @if (Session::get('success'))
                    <div class="alert alert-dismissible bg-light-success d-flex flex-column flex-sm-row p-5 mb-10">
                        <!--begin::Icon-->
                        <span class="svg-icon svg-icon-2hx svg-icon-primary me-4 mb-5 mb-sm-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z"
                                    fill="black" />
                            </svg>
                        </span>

                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <h4 class="fw-bold">Berhasil!</h4>
                            <span>{{ Session::get('success') }}</span>
                        </div>

                        <button type="button"
                            class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                            data-bs-dismiss="alert">
                            <span class="svg-icon svg-icon-1 svg-icon-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                        fill="black" />
                                </svg></span>
                        </button>
                    </div>
                @endif
                <div class="card py-12">
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container-xxl">
                            <form action="{{ route('terima-buku.store') }}" method="POST">
                                @csrf
                                <div class="row px-4">
                                    <div class="col-lg-6">
                                        <div class="mb-10">
                                            <label for="no_terima" class="required form-label">No Terima</label>
                                            <input id="no_terima" type="text" name="no_terima" class="form-control"
                                                placeholder="TB-000001" autocomplete="false" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-10">
                                            <label for="tanggal" class="required form-label">Tanggal</label>
                                            <input id="tanggal" type="date" name="tanggal" class="form-control"
                                                placeholder="2020-01-17" autocomplete="false" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="kode_buku" class="required form-label">Kode Buku</label>
                                            <input id="kode_buku" type="text" name="kode_buku" class="form-control"
                                                placeholder="BK-00001" autocomplete="false" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="judul_buku" class="required form-label">Judul Buku</label>
                                            <input id="judul_buku" type="text" name="judul_buku" class="form-control"
                                                placeholder="Laskar Pelangi" autocomplete="false" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="pengarang" class="required form-label">Pengarang</label>
                                            <input id="pengarang" type="text" name="pengarang" class="form-control"
                                                placeholder="Andrea Hirata" autocomplete="false" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="berat" class="required form-label">Berat</label>
                                            <input id="berat" type="number" name="berat" class="form-control"
                                                placeholder="6" autocomplete="false" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="qty" class="required form-label">Qty</label>
                                            <input id="qty" type="number" name="qty" class="form-control" placeholder="9"
                                                autocomplete="false" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="harga_beli" class="required form-label">Harga Beli</label>
                                            <input id="harga_beli" type="number" name="harga_beli" class="form-control"
                                                placeholder="50000" autocomplete="false" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label class="required form-label fs-6 fw-bold">Kategori</label>
                                            <select name="kategori"
                                                class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-allow-clear="true" data-kt-user-table-filter="role"
                                                data-hide-search="true" data-select2-id="select2-data-10-oj63" tabindex="-1"
                                                aria-hidden="true">
                                                <option data-select2-id="select2-data-12-ix32"></option>
                                                @forelse ($kategories as $index => $kategori)
                                                    <option value="{{ $kategori->kode_kategori }}">
                                                        {{ $kategori->kode_kategori }} -
                                                        {{ $kategori->nama_kategori }}</option>
                                                @empty
                                                    <option disabled>Harap Isi data Kategori</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="penerbit" class="required form-label">Penerbit</label>
                                            <input id="penerbit" type="text" name="penerbit" class="form-control"
                                                placeholder="Gramedia" autocomplete="false" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-10">
                                            <label for="tahun_terbit" class="required form-label">Tahun Terbit</label>
                                            <input id="tahun_terbit" type="text" name="tahun_terbit" class="form-control"
                                                placeholder="2022" autocomplete="false" />
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
                                            Terima Buku
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
