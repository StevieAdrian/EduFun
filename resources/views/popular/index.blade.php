@extends('layout.master')

@section('content')
<div class="popular-container">
    <div class="popular-header">
        <h1>Popular Articles</h1>
    </div>

    <div class="popular-section">
        @foreach($articles as $article)
            <div class="popular-card">
                <div class="article-image">
                    <img src="https://picsum.photos/seed/{{ $article->id }}/400/250" alt="{{ $article->title }}">
                </div>

                <div class="article-content">
                    <h2>{{ $article->title }}</h2>
                    <small>{{ \Carbon\Carbon::parse($article->publish_date)->format('d M Y') }} | by {{ $article->writer->name }}</small>
                    <p>{{ Str::limit($article->synopsis, 100, '...') }}</p>
                    <a href="{{ route('article.show', $article->query_string) }}">read more...</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="pagination">
        <span>Page</span>
        <span class="divider">|</span>
        @for($i = 1; $i <= $totalPages; $i++)
            <a href="{{ route('popular', ['page' => $i]) }}" class="{{ $page == $i ? 'active' : '' }}">{{ $i }}</a>
        @endfor
    </div>

</div>
@endsection
