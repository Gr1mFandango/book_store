@extends('layouts.default')

@section('content')
    <form action="{{ route('review.store') }}" method="post">
        @csrf

        <x-input-textarea
            :label="'Напишите обзор:'"
            :name="'review'"
            :id="'review'"
            :errors="$errors->get('review')"
            :value="old('review')"
        />

        <button class="btn btn-primary">Опубликовать</button>
    </form>
@endsection
