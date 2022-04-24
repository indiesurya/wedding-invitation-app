@extends('_layouts.admin')

@section('title', 'Cerita Pasangan')

@section('content')
	<div class="card shadow mb-4">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h6 class="card-title font-weight-bold text-primary m-0">
				Data Cerita
			</h6>
			<a href="{{ route('admin.story.create') }}" class="btn btn-primary btn-sm">Tambah Cerita</a>
		</div>
		<div class="card-body">
			<livewire:story.table />
		</div>
	</div>
@endsection