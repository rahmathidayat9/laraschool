@extends('layouts.backend.app',[
	'title' => 'Profile',
	'contentTitle' => 'Profile',
])
@section('content')
<x-alert></x-alert>
<div class="row">
	<x-card>
		<x-slot name="col">6</x-slot>
		<x-slot name="header">Profil Saya</x-slot>
		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="" disabled="" value="{{ auth()->user()->name }}" class="form-control" name="">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="" disabled="" value="{{ auth()->user()->email }}" class="form-control" name="">
		</div>
	</x-card>

	<x-card>
		<x-slot name="col">6</x-slot>
		<x-slot name="header">Edit Profil</x-slot>
		<form method="POST" action="{{ route('user-profile-information.update') }}">
		@csrf
		@method('put')
		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="" value="{{ auth()->user()->name }}" class="form-control @error('name') is-invalid @enderror" name="name">
			@error('name')
		      <div class="invalid-feedback">
		          {{ $message }}
		       </div>
		    @enderror
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" value="{{ auth()->user()->email }}" class="form-control @error('email') is-invalid @enderror" name="email">
			@error('email')
		      <div class="invalid-feedback">
		          {{ $message }}
		       </div>
		    @enderror
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
		</div>
		</form>
	</x-card>

</div>
@stop