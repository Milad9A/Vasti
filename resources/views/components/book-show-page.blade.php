<div class="book">
    <a href="{{ route('site.show', ['book' => $book]) }}">
        <img src="{{ asset($book->image) }}" alt="" height="300px" width="185px">
    </a>
    <h1 class="price">$12.2</h1>
    <input type="submit" value="Buy" class="buy">

    @livewire('add-book', ['book' => $book])

</div>
