<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Member;
use App\Models\Penjualan;
use App\Models\PenjualanDetail;
use App\Models\StockBuku;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();

        return view('admin.pages.penjualan.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_penjualan' => 'required',
            'tanggal' => 'required',
            'kode_buku' => 'required',
            'qty' => 'required',
            'diskon' => 'required',
        ]);

        $kode_member = (!$request->kode_member) ? "-" : $request->kode_member;
        $buku = Buku::where('kode_buku', $request->kode_buku)->get()->first();
        $total_berat = $request->qty * $buku->berat;
        $diskon = (!$request->diskon) ? 0 : (($request->qty * $buku->harga_jual) * $request->diskon) / 100;
        $total_harga = ($request->qty * $buku->harga_jual) - $diskon;

        Penjualan::create([
            'no_penjualan' => $request->no_penjualan,
            'kode_member' => $kode_member,
            'tanggal' => $request->tanggal,
            'total_berat' => $total_berat,
            'total_qty' => $request->qty,
            'total_harga' => $total_harga,
            'diskon' => $request->diskon,
        ]);

        PenjualanDetail::create([
            'no_penjualan' => $request->no_penjualan,
            'kode_buku' => $request->kode_buku,
            'berat' => $buku->berat,
            'qty' => $request->qty,
            'harga_jual' => $total_harga,
        ]);

        StockBuku::where('kode_buku', $request->kode_buku)->decrement('total_berat', $total_berat);
        StockBuku::where('kode_buku', $request->kode_buku)->decrement('total_qty', $request->qty);

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
