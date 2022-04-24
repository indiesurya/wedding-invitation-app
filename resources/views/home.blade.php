<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <audio hidden controls autoplay="autoplay">
        <source src="{{ asset('music/1.mp3') }}" type="audio/mpeg">
    </audio>

    @include('_includes.header')

    @include('_partials.about')

    @include('_partials.countdown')

    @include('_partials.story')

    @include('_partials.alert')

    @include('_partials.event')

    @include('_partials.gallery')

    @include('_partials.location')

    @include('_partials.footer')

    @include('_partials.image')

    @include('_partials.rsvp')

    <div class="bg-dark text-light up d-flex align-items-center justify-content-center rounded-circle position-fixed">
        <i class="fa fa-arrow-up"></i>
    </div>
    
    <script src="bootstrap/bootstrap.min.js"></script>
    <script>
        const weddingDate = '{{ $wedding->date }}'
    </script>
    <script src="js/script.js"></script>
</body>
</html>