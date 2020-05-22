<div>
    <input wire:model="search" type="text" placeholder="Search books by title...">

    <h1>Search Results:</h1>

    <ul>
        @if ($search != '')

            @foreach($books as $book)
                <li>{{ $book->title }}</li>
            @endforeach

        @endif
    </ul>
</div>
