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
                        <th>Vārds</th>
                        <th>Publicēts</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($items as $author)
                        <tr>
                            <td>{{ $author->id }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{!! $author->display ? '&#10004;&#65039;' : '&#10060;' !!}</td>
                            <td>
                                <a href="/authors/edit/{{ $author->id }}" class="btn btn-outline-primary">Labot</a>
                                <a href="/authors/delete/{{ $author->id }}" class="btn btn-outline-danger link-delete">Dzēst</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            @else

                <p>Nav autoru :(</p>

            @endif

            <a href="/authors/create" class="btn btn-primary mt-4">Pievienot autoru</a>
        </div>
    </div>

@endsection
