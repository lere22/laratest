@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        {{-- <p>{{ $post->body }}</p> --}}
        <p>By: Bambang | <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a href="/blog">Back to Posts</a>
@endsection
