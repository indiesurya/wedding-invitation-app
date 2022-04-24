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
					<th>Nama</th>
					<th>Email</th>
					<th>Pesan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($rsvps as $rsvp)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $rsvp->name }}</td>
						<td>{{ $rsvp->email }}</td>
						<td>{{ $rsvp->message }}</td>
						<td>
							<button class="btn btn-sm btn-danger" onclick="remove({{ $rsvp->id }})"><i class="fa fa-trash"></i></button>
						</td>
					</tr>
				@empty
					<tr>
						<td colspan="5" align="center">Kosong</td>
					</tr>
				@endforelse
			</tbody>
		</table>
		{{ $rsvps->links() }}
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