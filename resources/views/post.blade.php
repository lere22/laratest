@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>{{ $post['post-title'] }}</h2>
        <h5>By: {{ $post['post-author'] }}</h5>
        <p>{{ $post['post-content'] }}</p>
    </article>

    <a href="/blog">Back to Posts</a>
@endsection
