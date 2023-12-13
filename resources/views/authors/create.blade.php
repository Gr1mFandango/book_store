@extends('layouts.default')

@section('content')
    <form action="{{ route('authors.store') }}" method="post">
        @csrf

        <x-input
            :label="'Имя'"
            :type="'text'"
            :name="'name'"
            :id="'name'"
            :errors="$errors->get('name')"
            :value="old('name')"
        />

        <x-input
            :label="'Фамилия'"
            :type="'text'"
            :name="'surname'"
            :id="'surname'"
            :errors="$errors->get('surname')"
            :value="old('surname')"
        />

        <x-input
            :label="'Отчество'"
            :type="'text'"
            :name="'patronymic'"
            :id="'patronymic'"
            :errors="$errors->get('patronymic')"
            :value="old('patronymic')"
        />

        <div>
            <br>
            <button class="btn btn-primary">{{ __('messages.save') }}</button>
        </div>
    </form>
@endsection
