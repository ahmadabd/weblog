@extends('layout')

@include('nav')

@section('title')
    home
@endsection


@section('header')
    <h3>خوش آمدید</h3>
@endsection

@section('article')
    <h2>مقاله</h2>

    @foreach ($datas as $data)
        <div class="col" style="background:cornsilk;border:2px solid gray; border-radius: 10px; padding: 10px;margin-bottom:10px">
            <img class="rounded" src="{{ $data->image }}" width="100%" height="350">
            <hr>
            <h2>{{ $data->title }}</h2>
            <hr>
            <p style="text-align:center">{{ $data->content }}</p>
        </div>
    @endforeach

    <div style="display:flex;justify-content: center">
        {{ $datas->links() }}
    </div>

@endsection

@section('aside')
		<h3>اخبار</h3>
@endsection
