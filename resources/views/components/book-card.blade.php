{{--<div class="book">--}}
{{--    @if(!empty($book->images->first()))--}}
{{--        <img src="{{ $book->images->first()->url }}" alt="Обложка">--}}
{{--    @endif--}}

{{--    <h3>--}}
{{--        <a href="{{ route('books.show', ['book' => $book->id]) }}">--}}
{{--            {{ $book->title }}--}}
{{--        </a>--}}
{{--    </h3>--}}

{{--    <div class="author">{{ $book->author->name }} {{ $book->author->surname }}</div>--}}

{{--    <div class="annotation">{{ $book->annotation }}</div>--}}

{{--    <div class="publisher">Издатель: {{ $book->publisher->name }}</div>--}}
{{--</div>--}}


<div class="card" style="width: 18rem;">
    @if(!empty($book->images->first()))
        <img src="{{ $book->images->first()->url }}" class="card-img-top" alt="Обложка">
    @endif
    <div class="card-body">
        <h2 class="card-title">{{ $book->title }}</h2>
        <h6 class="author">{{ $book->author->name }} {{ $book->author->surname }}</h6>
        <p class="card-text">{{ $book->annotation }}</p>
        <div class="publisher">Издатель: {{ $book->publisher->name }}</div>
        <a href="{{ route('books.show', ['book' => $book->id]) }}" class="btn btn-primary">Перейти</a>
    </div>
</div>
