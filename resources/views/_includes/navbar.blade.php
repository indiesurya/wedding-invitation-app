<navbar class="navbar navbar-expand-md navbar-dark bg-transparent position-fixed top-0 left-0 w-100 py-4">
<div class="container">
	<a href="" class="navbar-brand"><span class="script h2 m-0">{{ $about->shortName }}</span></a>
	<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="menu">
		<ul class="navbar-nav ms-auto mb-2 mt-2 mb-md-0">
			<li class="nav-item pe-4">
				<a href="#about" class="nav-link">{{ $navbar->about }}</a>
			</li>
			<li class="nav-item pe-4">
				<a href="#story" class="nav-link">{{ $navbar->story }}</a>
			</li>
			<li class="nav-item pe-4">
				<a href="#event" class="nav-link">{{ $navbar->event }}</a>
			</li>
			<li class="nav-item pe-4">
				<a href="#gallery" class="nav-link">{{ $navbar->gallery }}</a>
			</li>
			<li class="nav-item pe-4">
				<a href="#location" class="nav-link">{{ $navbar->location }}</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#rsvp">{{ $navbar->rsvp }}</a>
			</li>
		</ul>
	</div>
</div>
</navbar>