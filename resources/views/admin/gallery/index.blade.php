@extends('_layouts.admin')

@section('title', 'Galeri')

@section('content')
	<div class="card shadow mb-4">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h6 class="card-title font-weight-bold text-primary m-0">
				Data Galeri
			</h6>
			<a href="{{ route('admin.gallery.create') }}" class="btn btn-primary btn-sm">Tambah Galeri</a>
		</div>
		<div class="card-body">
			<livewire:gallery.table />
		</div>
	</div>
@endsection