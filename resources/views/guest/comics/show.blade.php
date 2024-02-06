<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
<section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $comic->title }}
                            </h1>
                            <p>
                                Type: {{ $comic->type }}
                            </p>
                            <p>
                                Series: {{ $comic->series }}
                            </p>
                            <p>
                                Price: {{ $comic->price }}
                            </p>
                            <p>
                                Sale date: {{ $comic->sale_date }}
                            </p>
                            <p>
                                Artists: {{ $comic->artists }}
                            </p>
                            <p>
                                Writers: {{ $comic->writers }}
                            </p>
                            <div class="card-image">
                                <img class="w-50" src="{{  $comic->thumb }}" alt="{{ $comic->title }} ">
                            </div>
                            <div class="card-body text-center">
                                <h2>
                                    Description
                                </h2>
                                <p>
                                    {{ $comic->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>