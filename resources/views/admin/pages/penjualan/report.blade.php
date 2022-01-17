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
                <div class="card">
                    <div class="card-body pt-2">
                        @if ($penjualan->count())
                            <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                        id="kt_table_users">
                                        <thead>
                                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                <th>
                                                    No
                                                </th>
                                                <th>No Penjualan</th>
                                                <th>Kode Member</th>
                                                <th>Tanggal</th>
                                                <th>Total Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 fw-bold">
                                            @foreach ($penjualan as $index => $penjualan)
                                                <tr class={{ ($index + 1) % 2 ? 'odd' : 'even' }}>
                                                    <td>
                                                        {{ $index + 1 }}
                                                    </td>
                                                    <td>{{ $penjualan->no_penjualan }}</td>
                                                    <td>{{ $penjualan->kode_member }}</td>
                                                    <td>{{ $penjualan->tanggal }}</td>
                                                    <td>Rp. {{ $penjualan->total_harga }},00</td>
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
    </div>
@endsection
