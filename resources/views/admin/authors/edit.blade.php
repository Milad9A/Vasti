@extends('layouts.admin')

@section('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">

@endsection

@section('content')

<h1>Edit Author</h1>

<div class="col-sm-6">

    <form method="POST" action="/admin/authors/{{$author->id}}">
        @csrf
        @method('PUT')

        <div class="field">
            <label for="name">Name</label>

            <div class="control">
                <input class="input @error('name') is-danger @enderror" type="text" name="name" id="name"
                    value="{{ $author->name }}">

                @error('name')
                <p class="help is-danger">{{ $errors->first('name') }}</p>
                @enderror
            </div>

        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Update</button>
            </div>
        </div>


    </form>

</div>

</div>


@stop
