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
                        <th>Publicēts</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($items as $genre)
                        <tr>
                            <td>{{ $genre->id }}</td>
                            <td>{{ $genre->name }}</td>
                            <td>{!! $genre->display ? '&#10004;&#65039;' : '&#10060;' !!}</td>
                            <td>
                                <a href="/genres/edit/{{ $genre->id }}" class="btn btn-outline-primary">Labot</a>
                                <a href="/genres/delete/{{ $genre->id }}" class="btn btn-outline-danger link-delete">Dzēst</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            @else

                <p>Nav nekā pievienots</p>

            @endif

            <a href="/genres/create" class="btn btn-primary mt-4">Pievienot žanru</a>
        </div>
    </div>

@endsection
