<div class="modal fade" id="rsvp">
<div class="modal-dialog">
<div class="modal-content">
<form action="{{ route('rsvp') }}" method="post">
	@csrf
	<div class="modal-header">
		<h5 class="modal-title">{{ $navbar->rsvp }}</h5>
		<button class="btn-close" type="button" data-bs-dismiss="modal"></button>
	</div>
	<div class="modal-body">
		<div class="mb-3">
			<label class="form-label">Nama</label>
			<input type="text" class="form-control" name="name" placeholder="Nama" autofocus>
		</div>
		<div class="mb-3">
			<label class="form-label">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		<div class="mb-3">
			<label class="form-label">Pesan</label>
			<textarea class="form-control" name="message" placeholder="Pesan"></textarea>
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn btn-primary" type="submit">Kirim</button>
		<button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
	</div>
</form>
</div>
</div>
</div>