@extends('layout.master')

@section('content')
<div class="home-container">
    <div class="home-header">
        <h1>{{ $category->category }}</h1>
        <p>Explore the latest articles about {{ $category->category }}.</p>
    </div>

    <div class="category-section">
        @forelse ($articles as $article)
            <div class="category-card">
                <div class="article-image">
                    <img src="https://picsum.photos/seed/{{ $article->id }}/400/250" alt="{{ $article->title }}">
                </div>
                <div class="article-content">
                    <h2>{{ $article->title }}</h2>
                    <small>{{ $article->publish_date }} | by {{ $article->writer->name }}</small>
                    <p>{{ Str::limit($article->synopsis, 100, '...') }}</p>
                    <a href="{{ route('article.show', $article->query_string) }}">read more...</a>
                </div>
            </div>
        @empty
            <p>No articles found for this category.</p>
        @endforelse
    </div>
</div>
@endsection
