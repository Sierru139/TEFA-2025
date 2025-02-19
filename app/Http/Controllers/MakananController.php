<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanans = Makanan::all();
        return view('makanan/index', ['makanans' => $makanans]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('makanan/create');
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

        $makanan = new Makanan;

        $imagePath = $request->file('gambar')->store('makanan', 'public');

        $makanan->nama = $request->nama;
        $makanan->harga = $request->harga;
        $makanan->gambar = $imagePath;

        $makanan->save();

        return redirect()->route('makanan.index')->with('success','Sukses Menambahkan');
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
        $makanans = Makanan::find($id);
        return view('makanan/edit', ['makanans'=> $makanans]);
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

        $makanan = Makanan::find($id);

        if(isset($request->gambar_new)){
            if(isset($makanan->gambar)){
                Storage::delete($makanan->gambar);
            }
            $makanan->gambar = $request->file('gambar_new')->store('makanan', 'public');
        }

        if ($request->gambar_new !== null) {
            $gambarPath = $request->file('gambar_new')->store('makanan', 'public');
            $makanan->gambar = $gambarPath;
        }

        $makanan->nama = $request->nama;
        $makanan->harga = $request->harga;

        $makanan->save();

        return redirect()->route('makanan.index')->with('success','Sukses Mengubah!');
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
