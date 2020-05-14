@extends('layouts.admin')

@section('content')

    <h1>{{ $user->name }}'s Reading List</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Cover</th>
            <th>Title</th>
            <th>Status</th>
            <th>Author</th>
            <th>Summary</th>
            <th>Categories</th>
            <th>Rating</th>
            <th>ISBN</th>
            {{--            <th></th>--}}
            {{--            <th></th>--}}
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>

        <tbody>

        @if($books)
            @foreach($books as $book)

                <tr>
                    <td><a href="{{route('admin.books.edit', $book->id)}}">{{$book->id}}</a></td>
                    <td><a href="{{route('admin.books.edit', $book->id)}}"><img height="50"
                                                                                {{--src="{{$book->image ? $book->image->path : 'http:/placehold.it/400x400'}}"--}}
                                                                                alt=""></a></td>
                    <td>{{$book->title}}</td>
                    <td>{{$user->status->first()->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->summary}}</td>
                    <td>
                        @if ($book->categories)
                            @foreach($book->categories as $category)
                                {{ $category->name . ' ' }}                          {{--add ref to edit category--}}
                            @endforeach
                        @endif
                    </td>
                    <td>{{$book->rating}}</td>
                    <td>{{$book->isbn}}</td>
                    {{--                    <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>--}}
                    {{--                    <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>--}}
                    <td>{{$book->created_at->diffForhumans()}}</td>
                    <td>{{$book->updated_at->diffForhumans()}}</td>
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
        {{ $books->links() }}
    </div>

@stop
