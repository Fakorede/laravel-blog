@extends('layouts.app')

@section('content')

<div class="panel panel-default">

        <div class="panel-heading">
            POSTS
        </div>

    <div class="panel-body">
    
        <table class="table table-hover">
            <thead>
                <th>Title</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Trash</th>
            </thead>
            <tbody>
                @if($posts->count() > 0)
                    @foreach($posts as $post)

                        <tr>
                            <td>
                                <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="70" height="50">
                            </td>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td>
                                <a href="{{ route('post.edit', [ 'id' => $post->id ]) }}" class="btn btn-xs btn-info">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('post.trash', [ 'id' => $post->id ]) }}" class="btn btn-xs btn-danger">
                                    Trash
                                </a>
                            </td>
                        </tr>

                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No Published Posts</th>
                    </tr>
                @endif
            </tbody>
        </table>

    </div>

</div>


@stop