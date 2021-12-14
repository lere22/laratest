@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By: <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> | <a
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}"
                        class="img-fluid" alt="{{ $post->category->name }}">
                @endif

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>

                <p class="mt-4"><a href="/posts">Back to Posts</a></p>
            </div>
        </div>
    </div>
@endsection
