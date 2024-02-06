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
                <form action="{{ route('guest.comics.store') }}" method="POST" >
                    @csrf

                    <div class="mb-3">
                        <label for="title"class="form-label">
                            Nome del tipo di fumetto:
                        </label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="price"class="form-label">Prezzo:</label>
                        <input type="text" name="price" id="price" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="series"class="form-label">Series:</label>
                        <input type="text" name="series" id="series" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date"class="form-label">Sale date:</label>
                        <input type="date" name="sale_date" id="sale_date" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="type"class="form-label">Type:</label>
                        <input type="text" name="type" id="type" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="artists"class="form-label">Artists:</label>
                        <input type="text" name="artists" id="artists" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="writers"class="form-label">Writers:</label>
                        <input type="text" name="writers" id="writers" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="thumb"class="form-label">Url immagine</label>
                        <input type="longtext" name="thumb" id="thumb" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="description"class="form-label">Description:</label>
                        <textarea type="text" name="description" id="description" class="form-control"
                        rows="4">
                        </textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Crea il nuovo tipo di fumetto</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>