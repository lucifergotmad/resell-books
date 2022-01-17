<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Member;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class AlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $member = Member::find($request->id);
        $provinsis = Provinsi::all();
        $kotas = Kota::all();
        $kecamatans = Kecamatan::all();

        $alamats = Alamat::all();

        return view('admin.pages.alamat.index', compact('member', "provinsis", 'kotas', 'kecamatans', 'alamats'));
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
            'kode_member' => 'required',
            'alamat' => 'required',
            'kode_provinsi' => 'required',
            'kode_kota' => 'required',
            'kode_kecamatan' => 'required',
            'kode_pos' => 'required',
        ]);

        Alamat::create($request->all());

        return redirect()->route('member.index')->with('success', 'Berhasil menambahkan alamat');
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
        $alamat = Alamat::find($id);

        return view('admin.pages.alamat.edit', compact('alamat'));
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
        Alamat::find($id)->delete();

        return redirect()->route('alamat.index')->with('success', 'Berhasil menghapus alamat!');
    }
}
