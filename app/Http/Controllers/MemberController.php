<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->keyword) {
            $members = Member::where('nama_member', 'LIKE', '%' . $request->keyword . '%')->get();
        } else {
            $members = Member::orderBy('created_at', 'desc')->limit(10)->get();
        }

        return view('admin.pages.member.index', ['members' => $members]);
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
            'kode_member' => 'required|unique:tm_member|max:10',
            'nama_member' => 'required',
            'tanggal_lahir' => 'required',
            'no_ktp' => 'required|unique:tm_member|max:16',
            'no_hp' => 'required|max:12',
        ]);

        Member::create([
            'kode_member' => $request->kode_member,
            'nama_member' => $request->nama_member,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_ktp' => $request->no_ktp,
            'no_hp' => $request->no_hp,
            'poin' => 0,
        ]);

        return redirect()->route('member.index')->with('success', 'Member berhasil ditambahkan!');
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
        $member = Member::find($id);

        return view('admin.pages.member.edit', compact('member'));
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
            'nama_member' => 'required',
            'tanggal_lahir' => 'required',
            'no_ktp' => 'required',
            'no_hp' => 'required',
        ]);

        Member::find($id)->update($request->all());

        return redirect()->route('member.index')->with('success', 'Member berhasil diupdate');
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
