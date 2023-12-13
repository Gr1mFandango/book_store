@extends('layouts.default')

@section('content')
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Найти интересующую вас книгу</button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Найти книгу</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
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
        </div>
    </div>
    <x-book-list :books="$books" />

@endsection
