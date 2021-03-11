@extends('layouts.backend.app',[
	'title' => 'Ubah Password',
	'contentTitle' => 'Ubah Password',
])
@section('content')
<x-alert></x-alert>
<div class="row">
	<x-card>
		<x-slot name="col">6</x-slot>
		<x-slot name="header">Ubah Password</x-slot>
		<form method="POST" action="{{ route('user-password.update') }}">
		@csrf
		@method('put')
		<div class="form-group">
			<label>Password Sekarang</label>
			<input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password">
			@error('current_password')
		      <div class="invalid-feedback">
		          {{ $message }}
		       </div>
		    @enderror
		</div>
		<div class="form-group">
			<label>Password Baru</label>
			<input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
			@error('password')
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