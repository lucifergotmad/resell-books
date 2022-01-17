<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kotas = Kota::all();

        if ($request->keyword || $request->kode_bank) {
            $kecamatans = Kecamatan::where('nama_kecamatan', 'LIKE', '%' . $request->keyword . '%')->orWhere('kode_kota', $request->kode_kota)->get();
        } else {
            $kecamatans = Kecamatan::all();
        }

        return view('admin.pages.kota.index', ['kotas' => $kotas, 'kecamatans' => $kecamatans]);
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
            'kode_kota' => 'required',
            'kode_kecamatan' => 'required|min:1|max:4|unique:tm_kecamatan',
            'nama_kecamatan' => 'required',
        ]);

        Kecamatan::create($request->all());

        return redirect()->route('kecamatan.index')->with('success', "Kecamatan berhasil ditambahkan!");
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
        $kotas = Kota::all();
        $kecamatan = Kecamatan::find($id);

        return view('admin.pages.kecamatan.edit', compact('kotas', "kecamatan"));
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
            'kode_kota' => 'required',
            'nama_kecamatan' => 'required',
        ]);

        Kecamatan::find($id)->update($request->all());

        return redirect()->route('kecamatan.index')->with('success', 'Kecamatan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kecamatan::find($id)->delete();

        return redirect()->route('kota.index')->with('success', 'Kecamatan berhasil dihapus!');
    }
}
