@extends('layout.master')

@section('content')
<div class="article-container">
    <div class="article-header">
        <h2>{{ $article->category->category }}</h2>
        <img src="https://picsum.photos/seed/{{ $article->id }}/1000/400" alt="{{ $article->title }}" class="article-banner">
        <h1>{{ $article->title }}</h1>
        <p class="meta">
            {{ $article->publish_date }} | by {{ $article->writer->name }}
        </p>
    </div>

    <div class="article-body">
        <p>{{ $article->description }}</p>
    </div>
</div>
@endsection
