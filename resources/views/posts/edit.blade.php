@extends('layouts.app')
@section('content')
    <form class="bg-white rounded-lg shadow-sm p-4 text-center flex flex-col gap-5" action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mt-3 flex flex-col gap-2">
            <label for="title">{{ trans('posts.fields.title') }}</label>
            <input name="title" type="text" value="{{ $post->title }}" required>
            @error('title') {{ $message }} @enderror
        </div>
        <div class="mt-3 flex flex-col gap-2">
            <label for="content">{{ trans('posts.fields.content') }}</label>
            <textarea name="content" type="text" required>{{ $post->content }}</textarea>
            @error('content') {{ $message }} @enderror
        </div>
        <button type="submit" class="btn-primary">{{ trans('posts.titles.edit') }}</button>
    </form>
@endsection
