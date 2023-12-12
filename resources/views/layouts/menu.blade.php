<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="https://img.freepik.com/free-vector/open-blue-book-on-white_1308-69339.jpg" width="50" height="40" alt="Магазин книг">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">{{ __('messages.books') }}</a>
                </li>

                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('messages.adds') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('books.create') }}">{{ __('messages.add_book') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('authors.create') }}">{{ __('messages.add_author') }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">{{ __('messages.write_a_review') }}</a></li>
                    </ul>
                </li>
                @endauth

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.login') }}">{{ __('messages.login') }}</a>
                </li>
                @endguest

                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.logout') }}">{{ __('messages.logout') }}</a>
                </li>
                @endauth
            </ul>
            <form class="d-flex" action="{{ route('books.search') }}" role="search">
                <input
                    class="form-control me-2"
                    type="search"
                    name="q"
                    placeholder="{{ __('messages.search') }}"
                    aria-label="Search"
                    value="{{ request()->q }}"
                >
                <button class="btn btn-outline-success" type="submit">{{ __('messages.search') }}</button>
            </form>
        </div>
    </div>
</nav>
