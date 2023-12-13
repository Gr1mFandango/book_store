@extends('layouts.default')

@section('content')
    <form action="{{ route('user.store') }}" method="post">
        @csrf

        <x-input :label="'Адрес электронной почты:'" :type="'text'" :name="'email'" :id="'email'"/>

        <x-input :label="'Пароль:'" :type="'password'" :name="'password'" :id="'password'"/>

        <button class="btn btn-primary">Зарегистрироваться</button>
    </form>
@endsection

