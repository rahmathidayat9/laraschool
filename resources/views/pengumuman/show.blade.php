@extends('layouts.frontend.app',[
	'title' => 'Detail Pengumuman',
])
@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{ asset('img/bg/pengumuman.png') }});">
    <div class="blog-details-headline">
        <h3>{{ $pengumuman->judul }}</h3>
    </div>
</div>
<!-- ##### Catagory Area End ##### -->

<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-text">
                    {!! $pengumuman->deskripsi !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop