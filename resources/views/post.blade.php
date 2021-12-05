@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        {{-- <p>{{ $post->body }}</p> --}}
        <p>By: <a href="#">{{ $post->user->name }}</a> | <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}

        <p class="mt-4"><a href="/blog">Back to Posts</a></p>
    </article>
@endsection
