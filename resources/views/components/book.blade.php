<div class="book">
    <a href="">
        <img src="{{ asset($book->image) }}" alt="" height="240px" width="150px">
    </a>
    <h1 class="title">{{ $book->title }}</h1>
    <h1 class="author">by {{ $book->author->name }}</h1>
    <h1 class="price">$12.2</h1>
    <div class="rating">
        @for($i = 0; $i < $book->rating; $i++)
            <span class="fa fa-star checked"></span>
            @endfor
            @for ($j = 0; $j < 5 - $book->rating; $j++)
                <span class="fa fa-star"></span>
                @endfor
    </div>
    <input type="submit" value="Buy" class="buy">

    @livewire('add-book', ['book' => $book])

</div>