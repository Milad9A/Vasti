<div>
    {{--    <input wire:model="search" type="text" placeholder="Search books by title...">--}}

    {{--    <h1>Search Results:</h1>--}}

    <ul>
        @if ($search != '')

        <div class="container-content">
            <ul>
                @foreach($books as $book)
                <li><a href="{{ route('site.show', $book->id) }}"><img src="{{ asset($book->image) }}" alt="" height="60px">
                        <p>{{ $book->title }}</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>


        @endif
    </ul>
</div>
