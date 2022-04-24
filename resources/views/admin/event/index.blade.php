@extends('_layouts.admin')

@section('title', 'Acara')

@section('content')
	<div class="card shadow mb-4">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h6 class="card-title font-weight-bold text-primary m-0">
				Data Acara
			</h6>
			<a href="{{ route('admin.event.create') }}" class="btn btn-primary btn-sm">Tambah Acara</a>
		</div>
		<div class="card-body">
			<livewire:event.table />
		</div>
	</div>
@endsection