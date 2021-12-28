@extends('layouts.app')
@section('content')
    <div class="bg-white rounded-lg shadow-sm p-4 text-center flex flex-col gap-5">
        <h1 class="text-3xl"> @lang('pagination.welcome') </h1>
        <div class="flex justify-center gap-5">
            <button class="bg-pink-500 px-10 py-2 rounded-full text-white shadow-lg hover:scale-105 ease-in-out duration-700">@lang('posts.titles.create')</button>
            <button class="bg-white border border-gray-500 px-10 py-2 rounded-full shadow-lg hover:scale-105 ease-in-out duration-700">@lang('posts.titles.index')</button>
        </div>
    </div>
@endsection
