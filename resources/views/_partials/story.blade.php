<section class="py-5 mt-5" id="story">
<div class="container">
    <h2 class="text-center script display-5 mb-4">{{ $navbar->story }}</h2>
    <hr class="col-3 mx-auto mb-5">
    @forelse ($stories as $story)
        @if ($loop->odd)
            <div class="row mb-5 no-gutters">
                <div class="col-12 col-md px-3 px-md-0 order-last order-md-first text-md-end">
                    <h3 class="fw-bold mt-4">{{ $story->title }}</h3>
                    <span class="d-block mb-2">{{ $story->date_formatted }}</span>
                    <p class="text-muted lh-lg">
                        {{ $story->content }}
                    </p>
                </div>
                    <div class="vline d-none d-md-flex justify-content-center">
                            <div class="border-start h-100"></div>
                            @if (!$loop->last)
                                <div class="bubble rounded-circle"></div>
                            @endif
                    </div>
                <div class="col-12 col-md px-3 px-md-0">
                    <img src="{{ $story->photo_src }}" class="img-fluid">
                </div>
            </div>
        @else
            <div class="row mb-5 no-gutters">
                <div class="col-12 col-md px-3 px-md-0">
                    <img src="{{ $story->photo_src }}" class="img-fluid">
                </div>
                <div class="vline d-none d-md-flex justify-content-center">
                    <div class="border-start h-100"></div>
                        <div class="bubble rounded-circle"></div>
                </div>
                <div class="col-12 col-md px-3 px-md-0">
                    <h3 class="fw-bold mt-4">{{ $story->title }}</h3>
                    <span class="d-block mb-2">{{ $story->date_formatted }}</span>
                    <p class="text-muted lh-lg">
                        {{ $story->content }}
                    </p>
                </div>
            </div>
        @endif
    @empty
        Kosong
    @endforelse
</div>
</section>