@extends('layouts.backend.app',[
	'title' => 'Tambah Users',
	'contentTitle' => 'Tambah Users',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.users.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.users.store') }}">
					@csrf
					<div class="form-group">
						<label for="name">Full Name</label>
						<input required="" class="form-control" type="" name="name" id="name" placeholder="">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input required="" class="form-control" type="" name="email" id="email" placeholder="">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input required="" class="form-control" type="password" name="password" id="password" placeholder="">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop