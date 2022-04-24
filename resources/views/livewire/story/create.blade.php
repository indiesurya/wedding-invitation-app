<form class="col-md-6 mx-auto" wire:submit.prevent="save">
	@if (session()->has('success'))
	  <div class="alert alert-success alert-dismissible">
	    <span>{{ session('success' )}}</span>
	    <button class="close" data-dismiss="alert">&times;</button>
	  </div>
	@endif
	<div class="card shadow">
		<div class="card-header py-3">
			<h6 class="font-weight-bold text-primary m-0">Cerita Baru</h6>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title" placeholder="Judul" autofocus>

				@error('title')
					<span class="invalid-feedback">{{ $message }}</span>
				@enderror			
			</div>
			<div class="form-group">
				<label>Tanggal</label>
				<input type="date" class="form-control @error('date') is-invalid @enderror" wire:model="date" placeholder="Tanggal">

				@error('date')
					<span class="invalid-feedback">{{ $message }}</span>
				@enderror			
			</div>
			<div class="form-group">
				<label>Isi</label>
				<textarea class="form-control @error('content') is-invalid @enderror" wire:model="content" placeholder="Isi"></textarea>

				@error('content')
					<span class="invalid-feedback">{{ $message }}</span>
				@enderror			
			</div>
			<div class="form-group">
				<label>Foto</label>
				<div class="custom-file">
					<label class="custom-file-label">Upload</label>
					<input type="file" class="custom-file-input @error('photo') is-invalid @enderror" wire:model="photo">

					@error('photo')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button class="btn btn-primary" type="submit" wire:loading.attr="disabled" wire:target="save">Simpan</button>
			<a href="{{ route('admin.story.index') }}" class="btn btn-secondary">Kembali</a>
		</div>
	</div>
</form>

@push('js')
	<script src="{{ asset('sbadmin/vendor/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
	<script>
		bsCustomFileInput.init()
	</script>
@endpush