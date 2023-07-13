<?php

namespace App\Http\Controllers;

use App\Models\konsumen;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = konsumen::all();
        return view('konsumen.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('konsumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Konsumen::create(
            [
                'konsumen_nama_konsumen' => $request->konsumen_nama_konsumen,
                'konsumen_alamat' => $request->konsumen_alamat,
                'konsumen_no_tlpn' => $request->konsumen_no_tlpn,
            ]
        );

        return redirect('konsumen')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Konsumen::findOrFail($id);
        return view('konsumen.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Konsumen::findOrFail($id);
        $row->update(
            [
                'konsumen_nama_konsumen' => $request->konsumen_nama_konsumen,
                'konsumen_alamat' => $request->konsumen_alamat,
                'konsumen_no_tlpn' => $request->konsumen_no_tlpn,
            ]
        );
        return redirect('konsumen')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Konsumen::findOrFail($id);
        $row->delete();

        return redirect('konsumen')->with('success', 'Data berhasil dihapus');
    }
}