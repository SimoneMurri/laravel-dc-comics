<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
<section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Modifica nuovo comic:
                </h1>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('guest.comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Nome del comic:
                        </label>
                        <input type="text" name="title" id="title" class="form-control"  value="{{ old('title', $comic->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ old('description', $comic->description) }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Url image</label>
                        <input type="longtext" name="thumb" id="thumb" class="form-control" value="{{ old('thumb', $comic->thumb) }}">
                    </div>


                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo:</label>
                        <input type="text" name="price" id="price" class="form-control"  value="{{ old('price', $comic->price) }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series:</label>
                        <input type="text" name="series" id="series" class="form-control" value="{{ old('series', $comic->series) }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale date:</label>
                        <input type="text" name="sale_date" id="sale_date" class="form-control" value="{{ old('sale_date', $comic->sale_date) }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type:</label>
                        <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $comic->type) }}">
                    </div>

                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists:</label>
                        <input type="text" name="artists" id="artists" class="form-control" value="{{ old('artists', $comic->artists) }}">
                    </div>

                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers:</label>
                        <input type="text" name="writers" id="writers" class="form-control" value="{{ old('writers', $comic->writers) }}">
                    </div>


                    <button type="submit" class="btn btn-primary">Modifica nuovo comic</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>