<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Penjualan;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $members = Member::all();

        return view('admin.pages.laporan-penjualan.index', compact('members'));
    }

    public function createPDF(Request $request)
    {
        $data = Penjualan::where('tanggal', '>=', $request->start_date)->where('tanggal', '<=', $request->end_date)->where('kode_member', $request->kode_member)->get();

        view()->share('penjualan', $data);

        $pdf = PDF::loadView('admin.pages.penjualan.report', $data);

        return $pdf->download('pdf_file.pdf');
    }
}
