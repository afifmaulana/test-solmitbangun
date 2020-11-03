<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Kategori;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('pages.artikel.artikel',compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori=Kategori::all();
        return view('pages.artikel.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=$request->file('gambar');
        $filename=time().'.'.$image->getClientOriginalExtension();
        $path=public_path('uploads/artikel');
        $image->move($path,$filename);
        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->konten = $request->konten;
        $artikel->id_kategori = $request->kategori;
        $artikel->gambar = $filename;
        $artikel->slug = str_slug($request->judul);
        $artikel->save();
        return redirect()->route('artikel');
    }


    public function artikeldetail($slug){
        $artikel = Artikel::where('slug', $slug)->first();
        return view('pages.artikel.detail',compact('artikel'));
    }


    public function profile(){
        $profiles = Artikel::all();
        return view('pages.artikel.profile',compact('profiles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::find($id);
        $kategori=Kategori::all();
        return view('pages.artikel.edit',compact('artikel','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = Artikel::find($id);
        $artikel->judul = $request->judul;
        $artikel->konten = $request->konten;
        $artikel->id_kategori = $request->kategori;
        $image=$request->file('gambar');
        if ($image==''){
            $artikel->gambar=$request->old_gambar;
        }else{
            $filename=time().'.'.$image->getClientOriginalExtension();
            $path=public_path('uploads/artikel');
            $image->move($path,$filename);
            $artikel->gambar = $filename;
        }

        $artikel->update();
        return redirect()->route('artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $artikel->update(['status'=>'0']);
        return redirect()->route('artikel');
    }
}
