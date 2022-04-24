@extends('_layouts.admin')

@section('title', 'RSVP')

@section('content')
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="card-title font-weight-bold text-primary m-0">
				Data RSVP
			</h6>
		</div>
		<div class="card-body">
			<livewire:rsvp />
		</div>
	</div>
@endsection