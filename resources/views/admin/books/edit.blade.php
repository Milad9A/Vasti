@extends('layouts.admin')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">

@endsection

@section('content')

    <div class="row">

{{--        <div class="col-sm-3">--}}
{{--            <img src="{{$book->image->path}}" alt="" class="img-responsive">--}}
{{--        </div>--}}

        <div id="wrapper">
            <div id="page" class="container">
                <h1 class="heading has-text-weight-bold is-size-4">Update the Book</h1>

                <form method="POST" action="/admin/books/{{$book->id}}">
                    @csrf
                    @method('PUT')

                    <div class="field">
                        <label for="title">Title</label>

                        <div class="control">
                            <input
                                class="input @error('title') is-danger @enderror"
                                type="text"
                                name="title"
                                id="title"
                                value="{{ $book->title }}"
                            >

                            @error('title')
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="author">Author</label>

                        <div class="control">
                            <input
                                class="input @error('author') is-danger @enderror"
                                name="author"
                                id="author"
                                value="{{ $book->author }}"
                            >

                            @error('author')
                            <p class="help is-danger">{{ $errors->first('author') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="summary">Summary</label>

                        <div class="control">
                        <textarea
                            class="textarea @error('summary') is-danger @enderror"
                            name="summary"
                            id="summary">
                            {{ $book->summary }}
                        </textarea>

                            @error('summary')
                            <p class="help is-danger">{{ $errors->first('summary') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="isbn">ISBN</label>

                        <div class="control">
                            <input
                                class="input @error('isbn') is-danger @enderror"
                                name="isbn"
                                id="isbn"
                                value="{{ $book->isbn }}"
                            >

                            @error('isbn')
                            <p class="help is-danger">{{ $errors->first('isbn') }}</p>
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
                                value="{{ $book->image }}"
                            >

                            @error('image')
                            <p class="help is-danger">{{ $errors->first('image') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="rating">Rating</label>

                        <div class="control">
                            <input
                                class="input @error('rating') is-danger @enderror"
                                name="rating"
                                id="rating"
                                value="{{ $book->rating }}"
                            >

                            @error('rating')
                            <p class="help is-danger">{{ $errors->first('rating') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="category">Categories</label>

                        <div class="select is-multiple control">
                            <select name="categories[]" multiple>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>

                            @error('tags')
                            <p class="help is-danger">{{ $message }}</p>
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

        </div>

    </div>

@stop
