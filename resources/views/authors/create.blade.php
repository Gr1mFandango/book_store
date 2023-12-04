@extends('layouts.default')

@section('content')
    <form action="{{ route('authors.store') }}" method="post">
        @csrf

        <x-input :label="'Имя'" :name="'name'" />
        <x-input :label="'Фамилия'" :name="'surname'" />
        <x-input :label="'Отчество'" :name="'patronymic'" />

        <div>
            <br>
            <button>Сохранить</button>
        </div>
    </form>
@endsection
