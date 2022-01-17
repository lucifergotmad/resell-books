<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $provinsis = Provinsi::all();

        if ($request->keyword || $request->kode_bank) {

            $kotas = Kota::where('nama_kota', 'LIKE', '%' . $request->keyword . '%')->orWhere('kode_provinsi', $request->kode_provinsi)->get();

        } else {
            $kotas = Kota::all();
        }

        return view('admin.pages.kota.index', ['provinsis' => $provinsis, 'kotas' => $kotas]);
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
            'kode_provinsi' => 'required',
            'kode_kota' => 'required|min:1|max:4',
            'nama_kota' => 'required',
        ]);

        Kota::create([
            'kode_provinsi' => $request->kode_provinsi,
            'kode_kota' => $request->kode_kota,
            'nama_kota' => $request->nama_kota,
        ]);

        return redirect()->route('kota.index')->with('success', "Kota berhasil ditambahkan!");
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
        $provinsis = Provinsi::all();
        $kota = Kota::find($id);

        return view('admin.pages.kota.edit', compact('provinsis', 'kota'));
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
        $request->validate([
            'kode_provinsi' => 'required',
            'nama_kota' => 'required',
        ]);

        Kota::find($id)->update($request->all());

        return redirect()->route('kota.index')->with('success', 'Kota berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kota::find($id)->delete();

        return redirect()->route('kota.index')->with('success', 'Kota berhasil dihapus!');
    }
}
