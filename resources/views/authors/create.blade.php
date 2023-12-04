@extends('layouts.default')

@section('content')
    <form action="{{ route('authors.store') }}" method="post">
        @csrf

        <x-input :label="'Имя'" :type="'text'" :name="'name'" />

        <x-input :label="'Фамилия'" :type="'text'" :name="'surname'" />

        <x-input :label="'Отчество'" :type="'text'" :name="'patronymic'" />

        <div>
            <br>
            <button>Сохранить</button>
        </div>
    </form>
@endsection
