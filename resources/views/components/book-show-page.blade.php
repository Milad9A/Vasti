<div class="book">
    <a href="{{ route('site.show', ['book' => $book]) }}">
        <img src="{{ asset($book->image) }}" alt="" height="300px" width="185px">
    </a>
    <h1 class="price">{{ $book->price }}$</h1>

    @livewire('add-to-cart', ['book' => $book])

    @livewire('add-book', ['book' => $book])

</div>
