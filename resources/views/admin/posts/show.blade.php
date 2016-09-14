@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Post {{ $post->id }}
        <a href="{{ url('admin/posts/' . $post->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Post"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['admin/posts', $post->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete Post',
                    'onclick'=>'return confirm("Confirm delete?")'
            ))!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $post->id }}</td>
                </tr>
                <tr><th> FirstName </th><td> {{ $post->firstName }} </td></tr><tr><th> LastName </th><td> {{ $post->lastName }} </td></tr><tr><th> Email </th><td> {{ $post->email }} </td></tr><tr><th>Password</th></th><td> {{ $post->password }} </td></tr><tr><th>Gender</th></th><td> {{ $post->gender }} </td></tr><tr><th>Picture</th></th><td> {{ $post->picture }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection