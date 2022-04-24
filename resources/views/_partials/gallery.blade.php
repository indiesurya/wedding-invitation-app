<section class="py-5 my-5 gallery bg-light" id="gallery">
<div class="container py-5">
    <h2 class="text-center script display-5 mb-4">{{ $navbar->gallery }}</h2>
    <hr class="col-3 mx-auto mb-5">
    <div class="row">
        @foreach ($galleries as $gallery)
            <div class="col-lg-4">
                <div class="py-2">
                    <img src="{{ $gallery->photo_src }}" data-bs-toggle="modal" data-bs-target="#image" class="img-fluid">
                </div>
            </div>
        @endforeach
    </div>
</div>
</section>