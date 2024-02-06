<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel')</title>
    @vite('resources/js/app.js')

</head>
<body>
    <section class="products" id="comics">
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
                    @foreach ($comics as $comic)
                        <div class="col">
                            <a href="{{ route('guest.comics.show', $comic->id) }}">
                                <div class="card">
                                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} picture">
                                    <div class="card-body">
                                        <p class="text-uppercase">
                                            {{ $comic->title }}
                                        </p>
                                        <p class="text-uppercase">
                                            {{ $comic->description }}
                                        </p>
                                        <p class="text-uppercase">
                                            {{ $comic->price }}
                                        </p>
                                        <p class="text-uppercase">
                                            {{ $comic->series }}
                                        </p>
                                        <p class="text-uppercase">
                                            {{ $comic->sale_date }}
                                        </p>
                                        <p class="text-uppercase">
                                            {{ $comic->type }}
                                        </p>
                                        <p class="text-uppercase">
                                            {{ $comic->artists }}
                                        </p>
                                        <p class="text-uppercase">
                                            {{ $comic->writers }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</body>
</html>