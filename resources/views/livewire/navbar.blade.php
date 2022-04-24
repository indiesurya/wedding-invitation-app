<form class="col-md-6 mx-auto" wire:submit.prevent="save">
	@if (session()->has('success'))
	  <div class="alert alert-success alert-dismissible">
	    <span>{{ session('success' )}}</span>
	    <button class="close" data-dismiss="alert">&times;</button>
	  </div>
	@endif
	<div class="card shadow">
		<div class="card-header py-3">
			<h6 class="font-weight-bold text-primary m-0">Edit Navbar</h6>
		</div>
		<div class="card-body">
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Tentang Kami</label>
				<div class="col-sm-8">
					<input type="text" class="form-control @error('navbar.about') is-invalid @enderror" wire:model="navbar.about" placeholder="Tentang Kami" autofocus>

					@error('navbar.about')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror			
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Cerita Kami</label>
				<div class="col-sm-8">
					<input type="text" class="form-control @error('navbar.story') is-invalid @enderror" wire:model="navbar.story" placeholder="Cerita Kami" autofocus>

					@error('navbar.story')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror			
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Acara</label>
				<div class="col-sm-8">
					<input type="text" class="form-control @error('navbar.event') is-invalid @enderror" wire:model="navbar.event" placeholder="Acara" autofocus>

					@error('navbar.event')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror			
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Galeri</label>
				<div class="col-sm-8">
					<input type="text" class="form-control @error('navbar.gallery') is-invalid @enderror" wire:model="navbar.gallery" placeholder="Galeri" autofocus>

					@error('navbar.gallery')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror			
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Lokasi</label>
				<div class="col-sm-8">
					<input type="text" class="form-control @error('navbar.location') is-invalid @enderror" wire:model="navbar.location" placeholder="Lokasi" autofocus>

					@error('navbar.location')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror			
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">RSVP</label>
				<div class="col-sm-8">
					<input type="text" class="form-control @error('navbar.rsvp') is-invalid @enderror" wire:model="navbar.rsvp" placeholder="RSVP" autofocus>

					@error('navbar.rsvp')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror			
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button class="btn btn-primary" type="submit" wire:loading.attr="disabled" wire:target="save">Simpan</button>
		</div>
	</div>
</form>
