@extends('layoutAdmin')

@section('content')
    <form action="{{ route('AdminPodcasts') }}" style="margin-top:50px;" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
            @error('title')
            <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea type="text" class="form-control" id="content" name="content"></textarea>
            @error('content')
            <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="podcast">Upload_Podcast</label>
            <input type="file" class="form-control" id="podcast" name="podcast">
            @error('podcast')
            <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-dark">Send</button>
    </form>

    @if ($message = Session::get('success'))
        <div style="border: 1px solid green; border-radius:15px;margin: 30px;padding: 20px;">
            <p style="color:green">{{ $message }}</p>
        </div>
    @endif
@endsection
