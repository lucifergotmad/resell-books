<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->keyword) {
            $banks = Bank::where('kode_bank', 'LIKE', '%' . $request->keyword . '%')->get();
        } else {
            $banks = Bank::orderBy('updated_at', 'desc')->limit(10)->get();
        }

        return view('admin.pages.bank.index', ['banks' => $banks]);
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
            'kode_bank' => 'required|unique:tm_bank|max:8',
            'nama_bank' => 'required',
        ]);

        Bank::create([
            'kode_bank' => $request->kode_bank,
            'nama_bank' => $request->nama_bank,
        ]);

        return redirect()->route('bank.index')->with('success', 'Bank berhasil ditambahkan!');
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
        $bank = Bank::find($id);

        return view('admin.pages.bank.edit', compact('bank'));
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
            'nama_bank' => 'required',
        ]);

        Bank::find($id)->update($request->all());

        return redirect()->route('bank.index')->with('success', 'Bank berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bank = Bank::find($id);
        $bank->delete();

        return redirect()->route('bank.index')->with('success', 'Bank berhasil dihapus!');
    }
}
