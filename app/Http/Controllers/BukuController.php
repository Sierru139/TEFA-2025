<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = Buku::all();
        return view('buku/index', ['bukus' => $bukus]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku/create');
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
            'nama'=> 'required',
            'harga'=> 'required',
            'gambar'=> 'required',
        ]);

        $buku = new Buku;

        $imagePath = $request->file('gambar')->store('buku', 'public');

        $buku->nama = $request->nama;
        $buku->harga = $request->harga;
        $buku->gambar = $imagePath;

        $buku->save();

        return redirect()->route('buku.index')->with('success','Sukses Menambahkan');
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
        $bukus = Buku::find($id);
        return view('buku/edit', ['bukus'=> $bukus]);
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
            'nama'=> 'required',
            'harga'=> 'required',
            'gambar'=> 'nullable',
        ]);

        $buku = Buku::find($id);

        if(isset($request->gambar_new)){
            if(isset($buku->gambar)){
                Storage::delete($buku->gambar);
            }
            $buku->gambar =  $request->file('gambar_new')->store('buku', 'public');
        }

        if ($request->gambar_new !== null) {
            $gambarPath = $request->file('gambar_new')->store('buku', 'public');
            $buku->gambar = $gambarPath;
        }

        $buku->nama = $request->nama;
        $buku->harga = $request->harga;

        $buku->save();

        return redirect()->route('buku.index')->with('success','Sukses Mengubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bukus = Buku::find($id);
        $bukus->delete();
        return redirect()->route('buku.index')->with('success','Sukses Menghapus!');

    }
}
