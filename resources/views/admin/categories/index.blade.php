@extends('layouts.admin')

@section('content')

    <h1>Categories</h1>


    <div class="col-sm-6">

        <form method="POST" action="/admin/categories">
            @csrf

            <div class="field">
                <label for="name">Title</label>

                <div class="control">
                    <input
                        class="input @error('name') is-danger @enderror"
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                    >

                    @error('name')
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="image">Cover</label>

                <div class="control">
                    <input
                        class="fa-file @error('image') is-danger @enderror"
                        name="image"
                        id="image"
                        type="file"
                        value="{{ old('image') }}"
                    >

                    @error('image')
                    <p class="help is-danger">{{ $errors->first('image') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>

        </form>

    </div>

    <div class="col-sm-6">

        @if($categories)
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Cover</th>
                    <th>Created</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)

                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
                        <td><a href="{{route('admin.categories.edit', $category->id)}}"><img height="50"
                                                                                             {{--src="{{$book->image ? $book->image->path : 'http:/placehold.it/400x400'}}"--}}
                                                                                             alt=""></a></td>
                        <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'No date available'}}</td>
                    </tr>

                @endforeach

                </tbody>
            </table>

    </div>

    @endif

@stop
