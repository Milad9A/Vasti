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
                <h1 class="heading has-text-weight-bold is-size-4">Update the User</h1>

                <form method="POST" action="/admin/users/{{$user->id}}">
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
                                value="{{ $user->name }}"
                            >

                            @error('name')
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="email">Email</label>

                        <div class="control">
                            <input
                                class="input @error('email') is-danger @enderror"
                                name="email"
                                id="email"
                                value="{{ $user->email }}"
                            >

                            @error('email')
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="password">Password</label>

                        <div class="control">
                            <input
                                class="input @error('password') is-danger @enderror"
                                name="password"
                                id="password"
                                value="{{ '' }}"
                            >

                            @error('password')
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @enderror
                        </div>
                    </div>

                    {{--                <div class="field">--}}
                    {{--                    <label for="image">Cover</label>--}}

                    {{--                    <div class="control">--}}
                    {{--                        <input--}}
                    {{--                            class="fa-file @error('image') is-danger @enderror"--}}
                    {{--                            name="image"--}}
                    {{--                            id="image"--}}
                    {{--                            type="file"--}}
                    {{--                            value="{{ old('image') }}"--}}
                    {{--                        >--}}

                    {{--                        @error('image')--}}
                    {{--                        <p class="help is-danger">{{ $errors->first('image') }}</p>--}}
                    {{--                        @enderror--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}


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
