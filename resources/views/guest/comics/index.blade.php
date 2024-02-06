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
    <ul>
        @foreach ($comics as $comic)
            <li>
                <h2>{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
                <!-- Aggiungi altri campi da visualizzare -->
            </li>
        @endforeach
    </ul>
</body>
</html>