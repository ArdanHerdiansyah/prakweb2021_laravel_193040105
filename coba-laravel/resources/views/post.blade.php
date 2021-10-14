
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post["title"] }}</h1>
        {{-- <h5>{{ $post["author"] }}</</h5> --}}
        {!! $post->body !!} 
        {{-- tanda seru diatas untuk membuat paragraf --}}

    <a href="/blog">Back to Posts</a>
@endsection

