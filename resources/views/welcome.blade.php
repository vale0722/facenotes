@extends('layouts.app')
@section('content')
    <div class="bg-white rounded-lg shadow-sm p-4 text-center flex flex-col gap-5">
        <h1 class="text-3xl"> @lang('pagination.welcome') </h1>
        <div class="flex justify-center gap-5">
            <button class="btn-primary">@lang('posts.titles.create')</button>
            <button class="btn-secondary">@lang('posts.titles.index')</button>
        </div>
    </div>
@endsection
