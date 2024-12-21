@extends('layouts.app')

@section('content')
<h2>Регистрация</h2>

<form action="{{ route('register') }}" method="POST">
    @csrf
    <div>
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" required value="{{ old('name') }}">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

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

    <div>
        <label for="password_confirmation">Подтверждение пароля:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>

    <button type="submit">Зарегистрироваться</button>
</form>

<p>Уже есть аккаунт? <a href="{{ route('login') }}">Войти</a></p>
@endsection
