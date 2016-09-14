@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Posts <a href="{{ url('/admin/posts/create') }}" class="btn btn-primary btn-xs" title="Add New Post"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> FirstName </th><th> LastName </th><th> Email </th><th> Password </th><th> Gender </th><th> Picture </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $item)
                <tr>
                    <!-- <td>{{ $item->iteration }}</td>-->
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->firstName }}</td><td>{{ $item->lastName }}</td><td>{{ $item->email }}</td><td>{{ $item->password }}</td><td>{{ $item->gender }}</td><td>{{ $item->picture }}</td>
                    <td>
                        <a href="{{ url('/admin/posts/' . $item->id) }}" class="btn btn-success btn-xs" title="View Post"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/admin/posts/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Post"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/admin/posts', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Post" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Post',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $posts->render() !!} </div>
    </div>

</div>


@endsection
