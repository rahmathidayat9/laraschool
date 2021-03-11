@extends('layouts.backend.app',[
	'title' => 'Edit Users',
	'contentTitle' => 'Edit Users',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.users.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.users.update',$user->id) }}">
					@csrf
					@method('PATCH')
					<div class="form-group">
						<label for="name">Full Name</label>
						<input value="{{ $user->name }}" required="" class="form-control" type="" name="name" id="name" placeholder="">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input value="{{ $user->email }}" required="" class="form-control" type="" name="email" id="email" placeholder="">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input value="{{ $user->password }}" type="hidden" name="old_password">
						<input class="form-control" type="password" name="password" id="password" placeholder="">
						<small class="text-secondary">Kosongkan kolom password jika tidak ingin mengubah password</small>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop