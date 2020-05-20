@extends('layouts.admin')

@section('content')

    <h1>All Books</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Cover</th>
            <th>Title</th>
            <th>Author</th>
            <th>Summary</th>
            <th>Language</th>
            <th>Categories</th>
            <th>Publishing House</th>
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
                    <td><a href="{{route('admin.books.edit', $book->id)}}"><img height="100"
                                                                                src="{{ asset($book->image) }}"
                                                                                alt=""></a></td>
                    <td>{{$book->title}}</td>
                    <td><a href="">{{$book->author->name}}</a></td>
                    <td>{{$book->summary}}</td>
                    <td>{{$book->language}}</td>
                    <td>
                        @if ($book->categories)
                            @foreach($book->categories as $category)
                                <a href="{{ route('admin.categories.edit', $category->id) }}">{{ $category->name . ' ' }}</a>
                            @endforeach
                        @endif
                    </td>
                    <td><a href="">{{ $book->publishing_house->name }}</a></td>
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
