@extends('layouts.backend.app',[
	'title' => 'Edit Kategori Artikel',
	'contentTitle' => 'Edit Kategori Artikel'
])
@section('content')

<div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <a href="{{ route('admin.kategori-artikel.index') }}" class="btn btn-success btn-sm">Kembali</a>
            </h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.kategori-artikel.update',$kategoriArtikel->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama_kategori">Nama kategori</label>
                <input value="{{ $kategoriArtikel->nama_kategori }}" required="" type="" name="nama_kategori" placeholder="" class="form-control"> 
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
        </form>
    </div>
</div>

@stop