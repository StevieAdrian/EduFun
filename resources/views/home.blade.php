@extends('layout.master')

@section('content')
<div class="home-container">
    <div class="home-banner">
        <img src="https://picsum.photos/1100/350?random=1" alt="EduFun Banner">
    </div>

    <div class="category-section">
        @foreach ($articles as $article)
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
        @endforeach
    </div>
</div>
@endsection
