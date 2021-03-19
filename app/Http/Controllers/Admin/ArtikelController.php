<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\ArtikelDeleteEvent;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Str;
use File;

class ArtikelController extends Controller
{
    private $summernoteService;
    private $uploadService;

    public function __construct(SummernoteService $summernoteService, UploadService $uploadService)
    {
        $this->summernoteService = $summernoteService;
        $this->uploadService = $uploadService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::with(['user','kategoriArtikel'])->get();
        return view('admin.artikel.index',compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriArtikel = KategoriArtikel::all();
        return view('admin.artikel.create',compact('kategoriArtikel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Artikel::create([
            'judul' => $request->judul,
            'deskripsi' => $this->summernoteService->imageUpload('artikel'),
            'thumbnail' => $this->uploadService->imageUpload('artikel'),
            'slug' => Str::slug($request->judul),
            'user_id' => auth()->user()->id,
            'kategori_artikel_id' => $request->kategori_artikel_id,
        ]);

        return redirect()->route('admin.artikel.index')->with('success','Data berhasil ditambah');
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
    public function edit(Artikel $artikel)
    {   
        $kategoriArtikel = KategoriArtikel::get();
        return view('admin.artikel.edit',compact('artikel','kategoriArtikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $this->authorize('update',$artikel);

        Artikel::create([
            'judul' => $request->judul,
            'deskripsi' => $this->summernoteService->imageUpload('artikel'),
            'thumbnail' => $this->uploadService->imageUpload('artikel'),
            'slug' => Str::slug($request->judul),
            'user_id' => auth()->user()->id,
            'kategori_artikel_id' => $request->kategori_artikel_id,
        ]);
           
        return redirect()->route('admin.artikel.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {   
        $this->authorize('delete',$artikel);

        event(new ArtikelDeleteEvent($artikel));
        
        $artikel->delete();
        return redirect()->route('admin.artikel.index')->with('success','Data berhasil dihapus');
    }
}
