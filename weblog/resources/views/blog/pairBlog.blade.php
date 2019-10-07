@extends('layoutMain')

@section('title')
    weblog
@endsection

@section('article')
    <h2>مقاله</h2>

    <div class="col" style="background:cornsilk;border:2px solid gray; border-radius: 10px; padding: 10px;margin-bottom:10px">
        <img class="rounded" src="{{ $blog->image }}" width="100%" height="350">
        <hr>
        <h2>{{ $blog->title }}</h2>
        <hr>
        <p class="text-left">{{ $blog->content }}</p>

    </div>

@endsection

