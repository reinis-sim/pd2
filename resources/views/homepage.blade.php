<!doctype html>
<html lang="lv">

<head>
    <meta charset="utf-8">
    <meta 
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
        >
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0./css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
crossorigin="anonymous"
        >


        <title>PD2</title>
        </head>
        <body>
            <h1>PD2</h1>

            <footer>
            @if(Auth::check())
                <a href="/books">Administrācija</a>
            @else
                <a href="/login">Pieslēgties</a>
            @endif
            </footer>

        </body>

    </html>
