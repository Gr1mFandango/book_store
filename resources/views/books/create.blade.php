@extends('layouts.default')

@section('content')
    <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <x-input :label="'Название книги'" :type="'text'" :name="'title'" />

        <x-input :label="'Обложка'" :type="'file'" :name="'images[]'" :parameter="'multiple'" />

        <x-input :label="'Количество страниц'" :type="'text'" :name="'page_number'" />

        <div>
            <label>
                Описание<br>
                <textarea name="annotation"></textarea>
            </label>
        </div>
        <div>
            <label>
                Автор<br>
                <select name="author_id">
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }} {{ $author->surname }}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <div>
            <label>
                Издатель<br>
                <select name="publisher_id">
                    @foreach($publishers as $publisher)
                        <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <div>
            <label>
                Статус<br>
                <select name="status">
                    <option value="{{ \App\Enums\BookStatus::Published }}">Опубликована</option>
                    <option value="{{ \App\Enums\BookStatus::Draft }}">Черновик</option>
                </select>
            </label>
        </div>
        <div>
            <br>
            <button>Сохранить</button>
        </div>
    </form>
@endsection
