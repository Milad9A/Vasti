@extends('layouts.admin')

@section('content')

    <h1>All Users</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Profile Pic</th>
            <th>Name</th>
            <th>Email</th>
            <th>Admin</th>
{{--            <th>Role</th>--}}
            <th>Reading List</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $user)

                <tr>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->id}}</a></td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}"><img height="60"
                                                                                src="{{$user->image ? $user->image : 'http:/placehold.it/400x400'}}"
                                                                                alt=""></a></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{ $user->is_admin ? 'YES' : 'NO' }}</td>
                    <td><a href="{{ route('admin.books.index', ['user' => $user->id]) }}">View</a></td>
                    <td>{{$user->created_at->diffForhumans()}}</td>
                    <td>{{$user->updated_at->diffForhumans()}}</td>
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

    <div id="pag">
        <style>
            #pag {
                text-align: center;
            }
        </style>
        {{ $users->links() }}
    </div>

@stop
