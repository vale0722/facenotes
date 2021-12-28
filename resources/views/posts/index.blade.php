@extends('layouts.app')
@section('content')
    <div class="bg-white rounded-lg shadow-sm p-4 text-center flex flex-col gap-5">
        <table>
            <thead>
                <tr>
                    <th scope="col">{{ trans('posts.fields.title') }}</th>
                    <th scope="col">{{ trans('posts.fields.content') }}</th>
                    <th scope="col">{{ trans('posts.fields.created_at') }}</th>
                    <th scope="col">{{ trans('posts.fields.updated_at') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
