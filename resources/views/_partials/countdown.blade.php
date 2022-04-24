<section class="py-5 time text-white" style="background-image: url({{ $countdown->imageSrc }});">
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center text-lg-start">
            <p class="script display-4 mb-lg-0">{{ $countdown->text }}</p>
        </div>
        <div class="col-lg-6">
            <div class="row countdown">
                <div class="col my-2">
                    <div class="bg-white text-dark rounded shadow p-4 text-center">
                        <span class="d-block display-4 mb-2 day">0</span>
                        <span>Hari</span>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="bg-white text-dark rounded shadow p-4 text-center">
                        <span class="d-block display-4 mb-2 hour">0</span>
                        <span>Jam</span>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="bg-white text-dark rounded shadow p-4 text-center">
                        <span class="d-block display-4 mb-2 minute">0</span>
                        <span>Menit</span>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="bg-white text-dark rounded shadow p-4 text-center">
                        <span class="d-block display-4 mb-2 second">0</span>
                        <span>Detik</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>