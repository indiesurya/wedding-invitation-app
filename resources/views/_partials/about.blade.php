<section class="py-5 my-5" id="about">
<div class="container">
    <div class="row no-gutters align-items-center">
        <div class="col-md-6 px-3 px-md-0">
            <img src="{{ $about->man_photo_src }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 px-3 px-md-0">
            <div class="px-md-5 my-4 my-md-0">
                <h2 class="script">{{ $about->man_name }}</h2>
                <span class="text-muted d-block mt-3 mb-2">Putra dari bapak {{ $about->man_father }}</span>
                <p class="lh-lg">
                    {{ $about->man_about }}
                </p>
            </div>
        </div>
        <div class="col-md-6 px-3 px-md-0 order-md-last">
            <img src="{{ $about->woman_photo_src }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 px-3 px-md-0">
            <div class="px-md-5 my-4 my-lg-0 text-md-end">
                <h2 class="script">{{ $about->woman_name }}</h2>
                <span class="text-muted d-block my-2">Putri dari bapak {{ $about->woman_father }}</span>
                <p class="lh-lg">
                    {{ $about->woman_about }}
                </p>
            </div>
        </div>
    </div>
</div>
</section>