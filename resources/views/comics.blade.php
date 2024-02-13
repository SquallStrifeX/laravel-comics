<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
@include('partials.header')

<div class="jumbo-container">
    <span class="default-badge-bg">CURRENT SERIES</span>
</div>
<div>
    <div class="my-bg-black py-5">
        <div class="container">
            <div class="row">
                {{-- COMICS SECTION --}}
                @foreach ($comics as $comic)
                    <div class="col-2 card_container">


                            <!-- COMIC CARD -->
                            <div>
                                <div class="img-container p-relative">
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                    <span class="price-tag">{{ $comic['price'] }}</span>
                                </div>
                                <div>
                                    <h5>{{ $comic['series'] }}</h5>
                                </div>
                            </div>
            

                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <button type="button" class="default-btn"> LOAD MORE </button>
            </div>
        </div>
    </div>


@include('partials.footer')
</body>

</html>
