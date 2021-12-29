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
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <div class="flex flex-col gap-5">
                            <a href="{{ route('posts.edit', $post) }}" class="btn-primary">@lang('posts.titles.edit')</a>
                            <a href="{{ route('posts.show', $post) }}" class="btn-secondary">@lang('posts.titles.show')</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn-primary">@lang('posts.titles.delete')</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $posts->links() }}
@endsection
