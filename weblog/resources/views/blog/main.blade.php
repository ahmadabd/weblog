@extends('layoutMain')

@section('title')
    home
@endsection

@section('header')
    <h3>خوش آمدید</h3>
@endsection

@section('article')
    <h2>مقاله</h2>

    @forelse ($datas as $data)
        <div class="col" style="background:cornsilk;border:2px solid gray; border-radius: 10px; padding: 10px;margin-bottom:10px">
            <img class="rounded" src="{{ $data->image }}" width="100%" height="350">
            <hr>
            <a href="/blog/{{ $data->id }}">
                <h2>{{ $data->title }}</h2>
            </a>
            <hr>
            <p style="text-align:left">{{ Str::limit($data->content, 250) }}</p>
        </div>
    @empty
        <div style="border: 1px solid gray; border-radius: 10px; margin: 20px; padding: 30px">
            <p>چیزی موجود نسیت</p>
        </div>
    @endforelse

    <div style="display:flex;justify-content: center">
        {{ $datas->links() }}
    </div>

@endsection

@section('aside')
		<h3>اخبار</h3>
@endsection
