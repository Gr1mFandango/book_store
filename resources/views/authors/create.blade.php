@extends('layouts.default')

@section('content')
    <form action="{{ route('authors.store') }}" method="post">
        @csrf

        <x-input :label="'Имя'" :type="'text'" :name="'name'" :id="'name'" />

        <x-input :label="'Фамилия'" :type="'text'" :name="'surname'" :id="'surname'" />

        <x-input :label="'Отчество'" :type="'text'" :name="'patronymic'" :id="'patronymic'" />

        <div>
            <br>
            <button>Сохранить</button>
        </div>
    </form>
@endsection
