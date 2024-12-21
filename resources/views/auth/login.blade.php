@extends('layouts.app')

@section('content')
<h2>Вход</h2>

<form action="{{ route('login') }}" method="POST">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required value="{{ old('email') }}">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">Войти</button>
</form>

<p>Нет аккаунта? <a href="{{ route('register') }}">Зарегистрироваться</a></p>
@endsection
