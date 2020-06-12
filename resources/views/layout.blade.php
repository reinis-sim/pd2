<!doctype html>
<html lang="lv">

    <head>
        <meta charset="utf-8">
        <title>PD2 - @yield('title')</title>
        <meta name="description" content="PHP paraugs">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
    </head>

    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
            <div class="container">
                <a class="navbar-brand" href="/">PD2</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    @if(Auth::check())
                        <li class="nav-item {{ Str::contains(Request::path(), 'authors') ? 'active' : '' }}"><a class="nav-link" href="/authors">Autori</a></li>
                        <li class="nav-item {{ Str::contains(Request::path(), 'genres') ? 'active' : '' }}"><a class="nav-link" href="/genres">Žanri</a></li>
                        <li class="nav-item {{ Str::contains(Request::path(), 'books') ? 'active' : '' }}"><a class="nav-link" href="/books">Grāmatas</a></li>
                        <li class="nav-item float-right"><a class="nav-link" href="/logout">Beigt darbu</a></li>
                        
                    @else
                        <li class="nav-item float-right"><a class="nav-link" href="/login">Pieslēgties</a></li>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>



    <main class="container">
        @yield('content')
    </main>

    <div class="bg-light text-muted pt-5 pb-5 mt-5">
    <footer class="container">
    <p>VeA, 2020</p>
    <p1>Reinis Simsons</p1>
    </footer>
    </div>
    <script src="/main.js"></script>
    </body>
    </html>