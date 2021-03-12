@extends('layouts.backend.app',[
    'title' => 'Edit Pengumuman',
    'contentTitle' => 'Edit Pengumuman'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
@endpush

@section('content')
<div class="">    
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-success btn-sm">Kembali</a>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.pengumuman.update',$pengumuman->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input value="{{ $pengumuman->judul }}" required="" type="" name="judul" placeholder="" class="form-control title"> 
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea value="" required="" name="deskripsi" id="deskripsi" class="text-dark form-control summernote">{!! $pengumuman->deskripsi !!}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>    
            </div> 
        </div>
        </form>
    </div>
</div>
@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $(".summernote").summernote({
        height:500,
        callbacks: {
        // callback for pasting text only (no formatting)
            onPaste: function (e) {
              var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
              e.preventDefault();
              bufferText = bufferText.replace(/\r?\n/g, '<br>');
              document.execCommand('insertHtml', false, bufferText);
            }
        }
    })

    $(".summernote").on("summernote.enter", function(we, e) {
        $(this).summernote("pasteHTML", "<br><br>");
        e.preventDefault();
    });
</script>
@endpush