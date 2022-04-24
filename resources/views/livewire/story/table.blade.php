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
					<th>Judul</th>
					<th>Isi</th>
					<th>Tanggal</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($stories as $story)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $story->title }}</td>
						<td>{{ $story->read_more }}</td>
						<td>{{ $story->date_formatted }}</td>
						<td>
							<a href="{{ route('admin.story.edit', $story->id) }}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
							<button class="btn btn-sm btn-danger" onclick="remove({{ $story->id }})"><i class="fa fa-trash"></i></button>
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
			if (confirm('Hapus Cerita Ini?')) {
				Livewire.emit('delete', id)
			}
		}
	</script>
@endpush