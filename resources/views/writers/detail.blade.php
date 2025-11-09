@extends('layout.master')

@section('content')
<div class="writer-detail home-container">
    <div class="writer-header">
        <img src="https://api.dicebear.com/7.x/notionists/svg?seed={{ $writtenArticles->id }}" 
             alt="{{ $writtenArticles->name }}" 
             class="writer-photo-lg">

        <div class="writer-info">
            <h1>{{ $writtenArticles->name }}</h1>
            <p>{{ $writtenArticles->bio }}</p>
        </div>
    </div>

    <h2 class="writer-articles-title">
        Articles by {{ $writtenArticles->name }}
    </h2>

    <div class="category-section">
        @forelse ($writtenArticles->articles as $article)
            <div class="category-card">
                <div class="article-image">
                    <img 
                        src="https://picsum.photos/seed/{{ $article->id }}/400/200" 
                        alt="{{ $article->title }}">
                </div>
                <div class="article-content">
                    <h2>{{ $article->title }}</h2>
                    <small>
                        {{ \Carbon\Carbon::parse($article->publish_date)->format('d M Y') }} |
                        {{ $article->category->category }}
                    </small>
                    <p>{{ $article->synopsis }}</p>
                    <a href="{{ route('article.show', $article->query_string) }}">Read more...</a>
                </div>
            </div>
        @empty
            <p><em>No articles found.</em></p>
        @endforelse
    </div>
</div>
@endsection
