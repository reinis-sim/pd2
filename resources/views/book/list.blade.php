@extends('layout')

@section('title', $title)

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">{{ $title }}</h2>

            @if (count($items) > 0)

                <table class="table table-striped table-hover table-sm">
                    <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nosaukums</th>
                        <th>Autors</th>
                        <th>Žanrs</th>
                        <th>Gads</th>
                        <th>Cena</th>
                        <th>Apraksts</th>
                        <th>Publicēta</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($items as $book)

                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->author->name }}</td>
                            <td>{{ $book->genre->name }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->price }}</td>
                            <td>{{ Str::limit($book->description, 64) }}</td>
                            <td>{!! $book->display ? '&#10004;&#65039;' : '&#10060;' !!}</td>
                            <td>
                                <a href="/books/edit/{{ $book->id }}" class="btn btn-outline-primary">Labot</a>
                                <a href="/books/delete/{{ $book->id }}"
                                   class="btn btn-outline-danger link-delete">Dzēst</a>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

            @else

                <p>Nav grāmatu :(</p>

            @endif

            <a href="/books/create" class="btn btn-primary mt-4">Pievienot grāmatu</a>
        </div>
    </div>

@endsection
