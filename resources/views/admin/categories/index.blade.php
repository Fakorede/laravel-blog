@extends('layouts.app')

@section('content')

<div class="panel panel-default">

    <div class="panel-body">
    
        <table class="table table-hover">
            <thead>
                <th>Category name</th>
                <th>Edit Category</th>
                <th>Delete Category</th>
            </thead>
            <tbody>
                @foreach($categories as $category)

                    <tr>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            <a href="{{ route('category.edit', [ 'id' => $category->id ]) }}" class="btn btn-xs btn-info">
                                <span class="glphyicon glyphicon-pencil"></span>
                            </a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>

</div>


@stop