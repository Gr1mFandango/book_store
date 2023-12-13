@extends('layouts.default')

@section('content')

    @include('layouts.filter')

    <x-book-list :books="$books" />
    @dump($page)
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @for($i = 1; $id <= $page->lastPage(); $i++)
                <li class="page-item">
                    <a class="page-link" href="{{ $page->links() }}">{{ $i }}</a>
                </li>
            @endfor
        </ul>
    </nav>

@endsection


