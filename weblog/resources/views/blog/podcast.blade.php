@extends('layoutMain')
@section('title')
    podcasts
@endsection
@section('header')
    <h4>پادکست ها</h4>
@endsection
@section('article')

    @forelse ($podcasts as $podcast)
        <div class="col" style="background:cornsilk;border:2px solid gray; border-radius: 10px; padding: 10px;margin-bottom:10px">

            <hr>
                <h2 style="text-align: center">{{ $podcast->title }}</h2>

            <hr>
            <div  style="display: flex;justify-content: center;margin-bottom: 10px">
            <audio controls preload="auto">
                <source src="{{ $podcast->podcast }}">
            </audio>

            </div>
            <p style="text-align:right">{{ $podcast->content }}</p>
        </div>
    @empty
        <div style="border: 1px solid gray; border-radius: 10px; margin: 20px; padding: 30px">
            <p>چیزی موجود نسیت</p>
        </div>
    @endforelse
@endsection
@section('aside')

@endsection
