@extends('layouts.default')

@section('content')
    <form action="{{ route('user.auth') }}" method="post">
        @csrf

        <x-input :label="'Адрес электронной почты:'" :type="'text'" :name="'email'"/>

        <x-input :label="'Пароль:'" :type="'password'" :name="'password'"/>

        <button>Login</button>
    </form>
@endsection
