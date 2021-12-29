@extends('layouts.app')
@section('content')
    <div class="bg-white rounded-lg shadow-sm p-4 text-center flex flex-col gap-5">
        <h1 class="text-3xl">{{ $post->title }}</h1>
        <h1 class="text-xl text-gray-500">{{ $post->content }}</h1>
    </div>
@endsection
