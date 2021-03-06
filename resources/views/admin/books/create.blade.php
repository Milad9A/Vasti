@extends('layouts.admin')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">

@endsection

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Add a Book</h1>

            <form method="POST" action="/admin/books" enctype="multipart/form-data">
                @csrf

                <div class="field">
                    <label for="title">Title</label>

                    <div class="control">
                        <input
                            class="input @error('title') is-danger @enderror"
                            type="text"
                            name="title"
                            id="title"
                            value="{{ old('title') }}"
                        >

                        @error('title')
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="author_id">Author</label>

                    <div class="select control">
                        <select name="author_id">
                            @foreach($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}}</option>
                            @endforeach
                        </select>

                        @error('author_id')
                        <p class="help is-danger">{{ $message }}</p>
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
                            {{ old('summary') }}
                        </textarea>

                        @error('summary')
                        <p class="help is-danger">{{ $errors->first('summary') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="publishing_house_id">Publishing House</label>

                    <div class="select control">
                        <select name="publishing_house_id">
                            @foreach($publishing_houses as $publishing_house)
                                <option value="{{$publishing_house->id}}">{{$publishing_house->name}}</option>
                            @endforeach
                        </select>

                        @error('publishing_house_id')
                        <p class="help is-danger">{{ $message }}</p>
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
                            value="{{ old('isbn') }}"
                        >

                        @error('isbn')
                        <p class="help is-danger">{{ $errors->first('isbn') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="price">Price</label>

                    <div class="control">
                        <input
                            class="input @error('price') is-danger @enderror"
                            name="price"
                            id="price"
                            value="{{ old('price') }}"
                        >

                        @error('price')
                        <p class="help is-danger">{{ $errors->first('price') }}</p>
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

                <div class="field">
                    <label for="language">Language</label>

                    <div class="control">
                        <input
                            class="input @error('language') is-danger @enderror"
                            name="language"
                            id="language"
                            value="{{ old('language') }}"
                        >

                        @error('language')
                        <p class="help is-danger">{{ $errors->first('language') }}</p>
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
                            value="{{ old('rating') }}"
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

                        @error('categories')
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

@stop
