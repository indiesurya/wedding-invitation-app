<form class="col-md-6 mx-auto" wire:submit.prevent="save">
	@if (session()->has('success'))
	  <div class="alert alert-success alert-dismissible">
	    <span>{{ session('success' )}}</span>
	    <button class="close" data-dismiss="alert">&times;</button>
	  </div>
	@endif
	<div class="card shadow">
		<div class="card-header py-3">
			<h6 class="font-weight-bold text-primary m-0">Data Pernikahan</h6>
		</div>
		<div class="card-body">
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Tanggal Pernikahan</label>
				<div class="col-sm-8">
					<input type="date" class="form-control @error('wedding.date') is-invalid @enderror" wire:model="wedding.date" autofocus>

					@error('wedding.date')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror			
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Waktu Pernikahan</label>
				<div class="col-sm-8">
					<input type="time" class="form-control @error('wedding.time') is-invalid @enderror" wire:model="wedding.time" placeholder="Cerita Kami">

					@error('wedding.time')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror			
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Lokasi</label>
				<div class="col-sm-8">
					<textarea class="form-control @error('wedding.location') is-invalid @enderror" wire:model="wedding.location" placeholder="Lokasi"></textarea>

					@error('wedding.location')
						<span class="invalid-feedback">{{ $message }}</span>
					@enderror			
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Kode Google Map</label>
				<div class="col-sm-8">
					<textarea class="form-control @error('wedding.iframe') is-invalid @enderror" wire:model="wedding.iframe" placeholder="Kode Google Map"></textarea>

					@error('wedding.iframe')
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
