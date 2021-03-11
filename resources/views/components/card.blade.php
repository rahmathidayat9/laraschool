<div class="col-lg-{{ $col ?? '' }}">
	<div class="card">
		<div class="card-header">{{ $header ?? '' }}</div>
		<div class="card-body">
			{{ $slot }}
		</div>
	</div>
</div>