<div>
    @auth()
        @if($book->carts->count() > 0 && $book->cart(auth()->user()))
            @if ($book->cart(auth()->user())->books->contains($book))
                <input value="{{ $value }}" type="submit" class="buy">
            @endif
        @else
            <input wire:click="addBookToCart" type="submit" value="{{ $value }}" class="buy">
        @endif
    @else
        <form action="{{  route('site.login') }}">
            <input type="submit" value="Add to Cart" class="buy">
        </form>
    @endauth
</div>
