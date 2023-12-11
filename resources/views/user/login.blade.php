@extends('layouts.default')

@section('content')
    <form action="{{ route('user.auth') }}" method="post">
        @csrf

        <x-input :label="'Адрес электронной почты:'" :type="'text'" :name="'email'" :id="'email'"/>

        <x-input :label="'Пароль:'" :type="'password'" :name="'password'" :id="'password'"/>

        <button>Войти</button>
    </form>
@endsection
