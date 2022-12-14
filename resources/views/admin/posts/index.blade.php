@extends('layouts.sb-admin')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Posts</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Posts</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Trash</th>
                    </tr>
                </thead>
                <tbody>
                    @if($posts->count() > 0)
                    @foreach($posts as $post)
                    <tr>
                        <td>
                            <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px">
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            {{ $post->category->name }}
                        </td>
                        <td>
                            <a href="{{ route('post.edit', ['id' => $post->id ]) }}" class="btn btn-sm btn-info">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('post.delete', ['id' => $post->id ]) }}" class="btn btn-sm btn-danger">Trash</a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <th colspan="5" class="text-center">No posts yet.</th>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop