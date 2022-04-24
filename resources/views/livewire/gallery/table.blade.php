<div>

	@if (session()->has('success'))
	  <div class="alert alert-success alert-dismissible">
	    <span>{{ session('success' )}}</span>
	    <button class="close" data-dismiss="alert">&times;</button>
	  </div>
	@endif

	<div class="table-responsive">
		<table class="table table-striped table-bordered" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Foto</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($galleries as $gallery)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>
							<img src="{{ $gallery->photo_src }}" class="img-fluid" style="width: 200px">
						</td>
						<td>
							<a href="{{ route('admin.gallery.edit', $gallery->id) }}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
							<button class="btn btn-sm btn-danger" onclick="remove({{ $gallery->id }})"><i class="fa fa-trash"></i></button>
						</td>
					</tr>
				@empty
					<tr>
						<td colspan="5" align="center">Kosong</td>
					</tr>
				@endforelse
			</tbody>
		</table>
	</div>

</div>

@push('js')
	<script>
		const remove = id => {
			if (confirm('Hapus Gambar Ini?')) {
				Livewire.emit('delete', id)
			}
		}
	</script>
@endpush