@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Рецепты</h1>
    <a href="{{ route('recipes.create') }}">Create a new recipe</a>
    <ul>
        @foreach ($recipes as $recipe)
            <li>
                <h2>{{ $recipe->title }}</h2>
                <p>Категории: {{ $recipe->category->name }}</p>
                <p>{{ $recipe->content }}</p>
                <p>Размещено на: {{ $recipe->created_at }}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection

