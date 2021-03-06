@extends('layouts.admin', ['title' => 'Data Alamat'])

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar py-12" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Daftar Alamat</h1>
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

                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <div id="kt_content_container" class="container-xxl">
                        <form action="{{ route('alamat.store') }}" method="POST">
                            @csrf
                            <div class="row px-4">
                                <div class="col-lg-4">
                                    <div class="mb-10">
                                        <label for="kode_member" class="required form-label">Kode
                                            Member</label>
                                        <input id="kode_member" type="text" name="kode_member" class="form-control"
                                            placeholder="MB-000001" value="{{ $member->kode_member }}"
                                            autocomplete="false" readonly />
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="mb-10">
                                        <label for="kode_member" class="required form-label">Alamat
                                            Member</label>
                                        <input id="alamat" type="text" name="alamat" class="form-control"
                                            placeholder="Jl. Cipadaulun Pacet, Bandung, Jawa Barat" autocomplete="false" />
                                    </div>
                                </div>
                            </div>
                            <div class="row px-4">
                                <div class="col-lg-3">
                                    <div class="mb-10">
                                        <label class="required form-label fs-6 fw-bold">Provinsi</label>
                                        <select name="kode_provinsi"
                                            class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                            data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true"
                                            data-kt-user-table-filter="role" data-hide-search="true"
                                            data-select2-id="select2-data-10-oj63" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-12-ix32"></option>
                                            @forelse ($provinsis as $index => $provinsi)
                                                <option value="{{ $provinsi->kode_provinsi }}">
                                                    {{ $provinsi->kode_provinsi }} -
                                                    {{ $provinsi->nama_provinsi }}</option>
                                            @empty
                                                <option disabled>Harap Isi data Provinsi</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-10">
                                        <label class="required form-label fs-6 fw-bold">Kota</label>
                                        <select name="kode_kota"
                                            class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                            data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true"
                                            data-kt-user-table-filter="role" data-hide-search="true"
                                            data-select2-id="select2-data-10-oj63" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-12-ix32"></option>
                                            @forelse ($kotas as $index => $kota)
                                                <option value="{{ $kota->kode_kota }}">
                                                    {{ $kota->kode_kota }} -
                                                    {{ $kota->nama_kota }}</option>
                                            @empty
                                                <option disabled>Harap Isi data Kota</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-10">
                                        <label class="required form-label fs-6 fw-bold">Kecamatan</label>
                                        <select name="kode_kecamatan"
                                            class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                            data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true"
                                            data-kt-user-table-filter="role" data-hide-search="true"
                                            data-select2-id="select2-data-10-oj63" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-12-ix32"></option>
                                            @forelse ($kecamatans as $index => $kecamatan)
                                                <option value="{{ $kecamatan->kode_kecamatan }}">
                                                    {{ $kecamatan->kode_kecamatan }} -
                                                    {{ $kecamatan->nama_kecamatan }}</option>
                                            @empty
                                                <option disabled>Harap Isi data Kecamatan</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-10">
                                        <label for="kode_pos" class="required form-label">Kode Pos</label>
                                        <input id="kode_pos" type="text" name="kode_pos" class="form-control"
                                            placeholder="40385" autocomplete="false" />
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
                                        Tambah Alamat
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body pt-2">
                    @if ($alamats->count())
                        <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                    id="kt_table_users">
                                    <thead>
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th>
                                                No
                                            </th>
                                            <th>Kode Member</th>
                                            <th>Alamat</th>
                                            <th>Kode Provinsi</th>
                                            <th>Kode Kota</th>
                                            <th>Kode Kecamatan</th>
                                            <th>Kode Pos</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 fw-bold">
                                        @foreach ($alamats as $index => $alamat)
                                            <tr class={{ ($index + 1) % 2 ? 'odd' : 'even' }}>
                                                <td>
                                                    {{ $index + 1 }}
                                                </td>
                                                <td>{{ $alamat->kode_member }}</td>
                                                <td>{{ $alamat->alamat }}</td>
                                                <td>{{ $alamat->kode_provinsi }}</td>
                                                <td>{{ $alamat->kode_kota }}</td>
                                                <td>{{ $alamat->kode_kecamatan }}</td>
                                                <td>{{ $alamat->kode_pos }}</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Actions
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                                        data-kt-menu="true">
                                                        <div class="menu-item px-3">
                                                            <a href="{{ route('alamat.edit', $alamat->id) }}"
                                                                class="menu-link px-3">
                                                                Edit</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <button type="button"
                                                                class="btn btn-sm btn-white menu-link px-3"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_{{ $alamat->id }}">Hapus</button>
                                                        </div>
                                                    </div>

                                                    <div class="modal fade text-start" tabindex="-1"
                                                        id="kt_modal_{{ $alamat->id }}">
                                                        <form action="{{ route('alamat.destroy', $alamat->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                                                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span class="svg-icon svg-icon-2x"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Apakah anda yakin menghapus data ini?</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light"
                                                                            data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit" class="btn btn-danger">Ya,
                                                                            Hapus</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    @else
                        <div class="d-flex flex-column flex-column-fluid text-center p-6 py-lg-10">
                            <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                                style="background-image: url(media/illustrations/sketchy-1/17.png"></div>
                            <div class="pt-lg-5 mb-5">
                                <h1 class="fw-bolder fs-2qx text-gray-800 mb-5">Data Kosong</h1>
                                <div class="fw-bold fs-3 text-muted">
                                    <p> Silahkan tambahkan data baru!</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
