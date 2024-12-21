@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Креативные рецепты</h1>
    <form action="{{ route('recipes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Рецепты</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div class="form-group">
            <label for="content">Контент</label>
            <textarea name="content" id="content" required></textarea>
        </div>

        <div class="form-group">
            <label for="category_id">Категории</label>
            <select name="category_id" id="category_id" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Опубликовать рецепт</button>
    </form>
</div>
@endsection
