@extends('layouts.admin')

@section('content')

    <h1>All Reviews</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>User Id</th>
            <th>Book Id</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>

        <tbody>

        @if($reviews)
            @foreach($reviews as $review)

                <tr>
                    <td><a href="{{route('admin.reviews.edit', $review->id)}}">{{$review->id}}</a></td>
                    <td><a href="{{ route('admin.users.edit', $review->user_id) }}">{{$review->user_id}}</a></td>
                    <td><a href="{{ route('admin.books.edit', $review->book_id) }}">{{$review->book_id}}</a></td>
                    <td>{{$review->body}}</td>
                    <td>{{$review->created_at->diffForhumans()}}</td>
                    <td>{{$review->updated_at->diffForhumans()}}</td>
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
        {{ $reviews->links() }}
    </div>

@stop
