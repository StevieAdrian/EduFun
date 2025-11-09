@extends('layout.master')

@section('content')
<div class="writers-section">
    <h1 class="writers-title">Our Writers</h1>

    <div class="writers-grid">
        @foreach ($writers as $writer)
            <a href="{{ route('writers.detail', $writer->id) }}">
                <div class="writer-card">
                    <img src="https://api.dicebear.com/7.x/notionists/svg?seed={{ $writer->id }}" alt="{{ $writer->name }}" class="writer-photo">
    
                    <h3 class="writer-name">{{ $writer->name }}</h3>
                    <p class="writer-bio">{{ $writer->bio }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
