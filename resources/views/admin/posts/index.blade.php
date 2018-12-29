@extends('layouts.app')

@section('content')

<div class="panel panel-default">

    <div class="panel-body">
    
        <table class="table table-hover">
            <thead>
                <th>Title</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Trash</th>
            </thead>
            <tbody>
                @foreach($posts as $post)

                    <tr>
                        <td>
                            <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="70" height="50">
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            <a href="" class="btn btn-xs btn-info">
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
            </tbody>
        </table>

    </div>

</div>


@stop