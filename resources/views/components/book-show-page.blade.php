<div class="book">
    <a href="{{ route('site.show', ['book' => $book]) }}">
        <img src="{{ asset($book->image) }}" alt="" height="300px" width="185px">
    </a>
    <h1 class="price">{{ $book->price }}$</h1>

    @livewire('add-to-cart', ['book' => $book])

    @livewire('add-book', ['book' => $book])

    @auth
        @if (auth()->user()->purchased->contains($book))
            <form action="{{ route('site.books.download') }}" method="POST">
                @csrf
                <input type="hidden" name="title" value="{{ $book->title }}">
                <input value="Download PDF" type="submit" class="buy">
            </form>
        @endif
    @endauth
</div>
