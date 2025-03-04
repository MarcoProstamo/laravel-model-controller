<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite (['resources/sass/app.scss', "resources/js/app.js"])
    <title>Movies</title>
</head>

<body>
    <div class="text-bg-primary py-3">
        <div class="container">
            <h1>I miei film su Laravel</h1>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-3 g-3 py-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                {{ '(' . $movie['original_title'] . ')' }}
                            </h6>
                            <p class="card-text">{{ $movie['nationality'] }}</p>
                            <p class="card-text">{{ $movie['date'] }}</p>
                        </div>
                        <hr>
                        <p class="card-text text-center">{{ $movie['vote'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</body>

</html>
