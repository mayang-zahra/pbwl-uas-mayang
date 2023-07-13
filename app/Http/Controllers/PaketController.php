<?php

namespace App\Http\Controllers;

use App\Models\paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = paket::all();
        return view('paket.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Paket::create(
            [
                'paket_nama_paket' => $request->paket_nama_paket,
                'paket_harga_paket' => $request->paket_harga_paket,
            ]
        );

        return redirect('paket')->with('success','Data berhasil ditambahkan');
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
        $row = Paket::findOrFail($id);
        return view('paket.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Paket::findOrFail($id);
        $row->update(
            [
                'paket_nama_paket' => $request->paket_nama_paket,
                'paket_harga_paket' => $request->paket_harga_paket,
            ]
        );
        return redirect('paket')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Paket::findOrFail($id);
        $row->delete();

        return redirect('paket')->with('success', 'Data berhasil dihapus');
    }
}