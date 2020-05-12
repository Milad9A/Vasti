@extends('layouts.admin')

@section('content')

    <h1>All Books</h1>

{{--    <table class="table">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>Id</th>--}}
{{--            <th>Photo</th>--}}
{{--            <th>Owner</th>--}}
{{--            <th>Category</th>--}}
{{--            <th>Title</th>--}}
{{--            <th>Body</th>--}}
{{--            <th></th>--}}
{{--            <th></th>--}}
{{--            <th>Created</th>--}}
{{--            <th>Updated</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}

{{--        @if($posts)--}}
{{--            @foreach($posts as $post)--}}

{{--                <tr>--}}
{{--                    <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->id}}</a></td>--}}
{{--                    <td><a href="{{route('admin.posts.edit', $post->id)}}"><img height="50"--}}
{{--                                                                                src="{{$post->photo ? $post->photo->file : 'http:/placehold.it/400x400'}}"--}}
{{--                                                                                alt=""></a></td>--}}
{{--                    <td>{{$post->user->name}}</td>--}}
{{--                    <td>{{$post->category ? $post->category->name : 'Un-categorized'}}</td>--}}
{{--                    <td>{{$post->title}}</td>--}}
{{--                    <td>{{$post->body}}</td>--}}
{{--                    <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>--}}
{{--                    <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>--}}
{{--                    <td>{{$post->created_at->diffForhumans()}}</td>--}}
{{--                    <td>{{$post->updated_at->diffForhumans()}}</td>--}}
{{--                </tr>--}}

{{--            @endforeach--}}
{{--        @endif--}}
{{--        </tbody>--}}
{{--    </table>--}}

{{--    <div class="row">--}}

{{--        <div class="col-sm-6 col-sm-offset-5">--}}
{{--            {{$posts->render()}}--}}
{{--        </div>--}}

{{--    </div>--}}

@stop
