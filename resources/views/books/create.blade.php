@extends('layouts.default')

@section('content')
    <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <x-input
            :label="__('validation.attributes.book.title')"
            :type="'text'"
            :name="'title'"
            :id="'title'"
            :errors="$errors->get('title')"
            :value="old('title')"
        />
        <x-input
            :label="'Обложка'"
            :type="'file'"
            :name="'images[]'"
            :id="'images'"
            :multiple="true"
            :errors="$errors->get('images')"
            :value="old('images')"
        />
        <x-input
            :label="__('validation.attributes.book.page_number')"
            :type="'text'"
            :name="'page_number'"
            :id="'page_number'"
            :errors="$errors->get('page_number')"
            :value="old('page_number')"
        />

        <x-input-textarea
            :label="__('validation.attributes.book.annotation')"
            :name="'annotation'"
            :id="'annotation'"
            :errors="$errors->get('annotation')"
            :value="old('annotation')"
        />

        <x-input-select
            :name="'status'"
            :id="'status'"
            :label="'Статус'"
            :options="$statusList"
            :value="old('status')"
        />

        <x-input-select
            :name="'author_id'"
            :id="'author_id'"
            :label="'Автор'"
            :options="$authors"
            :value="old('author_id')"
        />

        <x-input-select
            :name="'publisher_id'"
            :id="'publisher_id'"
            :label="'Издатель'"
            :options="$publishers"
            :value="old('publisher_id')"
        />

        <div>
            <br>
            <button class="btn btn-primary">{{ __('messages.save') }}</button>
        </div>
    </form>
@endsection
