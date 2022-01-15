<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Rekening;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $banks = Bank::all();

        if ($request->keyword || $request->kode_bank) {

            $rekenings = Rekening::where('atas_nama', 'LIKE', '%' . $request->keyword . '%')->orWhere('kode_bank', $request->kode_bank)->get();

        } else {
            $rekenings = Rekening::orderBy('updated_at', 'desc')->limit(10)->get();
        }

        return view('admin.pages.rekening.index', ['banks' => $banks, 'rekenings' => $rekenings]);
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
            'kode_bank' => 'required',
            'no_rekening' => 'required|min:10|max:16',
            'atas_nama' => 'required',
        ]);

        Rekening::create([
            'kode_bank' => $request->kode_bank,
            'no_rekening' => $request->no_rekening,
            'atas_nama' => $request->atas_nama,
        ]);

        return redirect()->route('rekening.index')->with('success', 'Rekening berhasil ditambahkan!');
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
        $rekening = Rekening::find($id);

        return view('admin.pages.rekening.edit', compact('rekening'));
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
