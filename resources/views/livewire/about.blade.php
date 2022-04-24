<form class="row mb-4" wire:submit.prevent="save">

	<div class="col-12">
		@if (session()->has('success'))
		  <div class="alert alert-success alert-dismissible">
		    <span>{{ session('success' )}}</span>
		    <button class="close" data-dismiss="alert">&times;</button>
		  </div>
		@endif
	</div>
	
	<div class="col-sm-6 mb-4">
		<div class="card shadow">
			<img src="{{ $about->man_photo_src }}" alt="" class="card-img-top">
			<div class="card-body">
				<h5 class="card-title font-weight-bold">Pengantin Pria</h5>
				<hr>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control @error('about.man_name') is-invalid @enderror" wire:model="about.man_name" placeholder="Nama" autofocus>

					@error('about.man_name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>Nama Pendek</label>
					<input type="text" class="form-control @error('about.man_nickname') is-invalid @enderror" wire:model="about.man_nickname" placeholder="Nama Pendek" autofocus>

					@error('about.man_nickname')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>Bapak</label>
					<input type="text" class="form-control @error('about.man_father') is-invalid @enderror" wire:model="about.man_father" placeholder="Bapak">

					@error('about.man_father')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>Tentang</label>
					<textarea class="form-control @error('about.man_about') is-invalid @enderror" wire:model="about.man_about" placeholder="Tentang"></textarea>

					@error('about.man_about')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>Foto</label>
					<div class="custom-file">
						<label class="custom-file-label">{{ $about->man_photo }}</label>
						<input type="file" class="custom-file-input @error('man_photo') is-invalid @enderror" wire:model="man_photo">

						@error('man_photo')
							<span class="invalid-feedback">{{ $message }}</span>
						@enderror
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-sm-6 mb-4">
		<div class="card shadow">
			<img src="{{ $about->woman_photo_src }}" alt="" class="card-img-top">
			<div class="card-body">
				<h5 class="card-title font-weight-bold">Pengantin Wanita</h5>
				<hr>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control @error('about.woman_name') is-invalid @enderror" wire:model="about.woman_name" placeholder="Nama" autofocus>

					@error('about.woman_name')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>Nama Pendek</label>
					<input type="text" class="form-control @error('about.woman_nickname') is-invalid @enderror" wire:model="about.woman_nickname" placeholder="Nama Pendek" autofocus>

					@error('about.woman_nickname')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>Bapak</label>
					<input type="text" class="form-control @error('about.woman_father') is-invalid @enderror" wire:model="about.woman_father" placeholder="Bapak">

					@error('about.woman_father')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>Tentang</label>
					<textarea class="form-control @error('about.woman_about') is-invalid @enderror" wire:model="about.woman_about" placeholder="Tentang"></textarea>

					@error('about.woman_about')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label>Foto</label>
					<div class="custom-file">
						<label class="custom-file-label">{{ $about->woman_photo }}</label>
						<input type="file" class="custom-file-input @error('woman_photo') is-invalid @enderror" wire:model="woman_photo">

						@error('woman_photo')
							<span class="invalid-feedback">{{ $message }}</span>
						@enderror
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col mb-4">
		<div class="card shadow">
			<div class="card-body">
				<button class="btn btn-primary" type="submit" wire:loading.attr="disabled" wire:target="save">Simpan</button>
			</div>
		</div>
	</div>

</form>

@push('js')
	<script src="{{ asset('sbadmin/vendor/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
	<script>
		bsCustomFileInput.init()
	</script>
@endpush