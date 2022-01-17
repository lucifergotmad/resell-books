<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\StockBuku;
use App\Models\TerimaBuku;
use App\Models\TerimaBukuDetail;
use Illuminate\Http\Request;

class TerimaBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategories = Kategori::all();

        return view('admin.pages.terima-buku.index', compact('kategories'));
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
            'no_terima' => 'required',
            'tanggal' => 'required',
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'pengarang' => 'required',
            'berat' => 'required',
            'qty' => 'required',
            'harga_beli' => 'required',
            'kategori' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
        ]);

        $berat_per_item = $request->berat / $request->qty;

        TerimaBuku::create([
            'no_terima' => $request->no_terima,
            'tanggal' => $request->tanggal,
            'total_berat' => $request->berat,
            'total_harga' => $request->harga_beli,
            'total_qty' => $request->qty,
        ]);

        TerimaBukuDetail::create([
            'no_terima' => $request->no_terima,
            'kode_buku' => $request->kode_buku,
            'judul_buku' => $request->judul_buku,
            'pengarang' => $request->pengarang,
            'berat' => $request->berat,
            'qty' => $request->qty,
            'harga_beli' => $request->harga_beli,
            'kategori' => $request->kategori,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
        ]);

        Buku::create([
            'kode_buku' => $request->kode_buku,
            'judul_buku' => $request->judul_buku,
            'pengarang' => $request->pengarang,
            'berat' => $berat_per_item,
            'harga_jual' => 0,
            'harga_sewa' => 0,
            'kode_kategori' => $request->kategori,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
        ]);

        StockBuku::create([
            'kode_buku' => $request->kode_buku,
            'total_qty' => $request->qty,
            'total_berat' => $request->berat,
        ]);

        return redirect()->route('buku.index')->with('success', 'Berhasil terima buku!');

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
