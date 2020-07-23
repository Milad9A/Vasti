@extends('layouts.site')

@section('content')

    <div class="categories-container">
        <div class="categories-row-1">
            <div class="main-category">
                <img src="{{ asset($category->image) }}" alt=""/>
                <div class="container-row1">
                    <p class="category-name">{{ $category->name }}</p>
                    <div class="line"></div>
                    @livewire('follow-category', ['category' => $category])
                </div>
            </div>
        </div>
        <div class="categories-row-2">
            <p class="recommended-categories">Similar Categories</p>
            <div class="container-categories-row-2">
                <div class="recommend-categories">

                    @foreach(App\Category::all()->except($category->id)->take(5) as $cat)
                        <a href="{{ route('site.category.show', ['category' => $cat]) }}">
                            <div class="container-recommend-categories">
                                <img src="{{ asset($cat->image) }}" alt=""/>
                                <p class="category-name">
                                    {{ $cat->name }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="categories-row-3">
                <p class="category-text">
                    Books under the <span>Art</span> category
                </p>
                <div class="container-categories-row-3">
                    @foreach(App\Category::findOrFail($category->id)->books()->get() as $book)
                        @component('components.book', compact('book'))
                        @endcomponent
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
