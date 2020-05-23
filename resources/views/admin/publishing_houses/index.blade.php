@extends('layouts.admin')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">

@endsection

@section('content')

    <h1>Publishing Houses</h1>

    <div class="col-sm-6">

        <form method="POST" action="/admin/publishinghouses">
            @csrf

            <div class="field">
                <label for="name">Name</label>

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
                <label for="country">Country</label>

                <div class="control">
                    <input
                        class="input @error('country') is-danger @enderror"
                        type="text"
                        name="country"
                        id="country"
                        value="{{ old('country') }}"
                    >

                    @error('country')
                    <p class="help is-danger">{{ $errors->first('country') }}</p>
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

        @if($houses)
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Created</th>
                </tr>
                </thead>
                <tbody>

                @foreach($houses as $house)

                    <tr>
                        <td>{{$house->id}}</td>
                        <td><a href="{{route('admin.houses.edit', $house->id)}}">{{$house->name}}</a></td>
                        <td>{{$house->country}}</td>
                        <td>{{$house->created_at ? $house->created_at->diffForHumans() : 'No date available'}}</td>
                    </tr>

                @endforeach

                </tbody>
            </table>

    </div>

    @endif

@stop
