<div>
{{--    <input wire:model="search" type="text" placeholder="Search books by title...">--}}

{{--    <h1>Search Results:</h1>--}}

    <ul>
        @if ($search != '')

            <div class="content-search" id="content">
                <div class="container-content">
                    <ul>
                        @foreach($books as $book)
                            <li><a href=""><img src="/img/cover-book-001.png" alt="" height="60px">
                                    <p>{{ $book->title }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        @endif
    </ul>
</div>
