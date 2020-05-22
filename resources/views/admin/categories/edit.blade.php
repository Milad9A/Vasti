@extends('layouts.admin')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">

@endsection

@section('content')

    <h1>Edit Category</h1>

    <div class="row">

        <div class="col-sm-3">

            <img src="{{ asset($category->image) }}" alt=""
                 class="img-responsive img-rounded">

        </div>


    <div class="col-sm-6">

        <form method="POST" action="/admin/categories/{{$category->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="field">
                <label for="name">Name</label>

                <div class="control">
                    <input
                        class="input @error('name') is-danger @enderror"
                        type="text"
                        name="name"
                        id="name"
                        value="{{ $category->name }}"
                    >

                    @error('title')
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label for="image">Cover</label>

                    <div class="control">
                        <input
                            class="fa-file @error('image') is-danger @enderror"
                            name="image"
                            id="image"
                            type="file"
                            value="{{ $category->image }}"
                        >

                        @error('image')
                        <p class="help is-danger">{{ $errors->first('image') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Update</button>
                    </div>
                </div>

            </div>
        </form>
        
    </div>
    
</div>


@stop
