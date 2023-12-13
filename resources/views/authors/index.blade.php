@extends('layouts.default')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Отчество</th>
                <th scope="col">Книги автора</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <th scope="row">{{$author->id}}</th>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->surname }}</td>
                    <td>{{ $author->patronymic }}</td>
                    <td><a class="btn btn-primary" href="{{ route('authors.show', ['author' => $author->id]) }}" role="button">Книги</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
