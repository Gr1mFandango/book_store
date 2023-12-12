@extends('layouts.default')

@section('content')
    <form action="{{ route('books.filter') }}" method="get" >
        @csrf

        <x-input
            :label="__('validation.attributes.book.title')"
            :type="'text'"
            :name="'title'"
            :id="'title'"
            :errors="$errors->get('title')"
            :value="old('title')"
        />
        <x-input-textarea
            :label="__('validation.attributes.book.annotation')"
            :name="'annotation'"
            :id="'annotation'"
            :errors="$errors->get('annotation')"
            :value="old('annotation')"
        />
        <x-input
            :label="__('validation.attributes.book.page_number')"
            :type="'text'"
            :name="'page_number'"
            :id="'page_number'"
            :errors="$errors->get('page_number')"
            :value="old('page_number')"
        />

        <div>
            <br>
            <button class="btn btn-primary">Искать</button>
        </div>
    </form>
    <x-book-list :books="$books" />
@endsection
