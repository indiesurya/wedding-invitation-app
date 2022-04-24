<header class="bg-dark" style="background-image: url({{ $banner->imageSrc }});" id="header">
	
	@include('_includes.navbar')

	<div class="h-100 d-flex align-items-center banner">
		<div class="container text-center text-white">
			<p class="h4">{{ $banner->text }}</p>
			<h1 class="script display-1 my-4">{{ $about->man_nickname }} & {{ $about->woman_nickname }}</h1>
			<time class="h5">{{ $wedding->dateFormatted }}</time>
		</div>
	</div>

</header>