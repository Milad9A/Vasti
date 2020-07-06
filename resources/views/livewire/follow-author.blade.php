<div>
    <div class="avatar-name">
        <img src="/img/Categories/Children.jpg" alt="" class="avatar" width="60" height="60">


        <div class="name-followers">
            <p class="author-name">{{ $book->author->name }}</p>
            <p class="followers">{{ $count }} followers</p>
        </div>
    </div>


    <div>
        @if (Illuminate\Support\Facades\Auth::user()->followsAuthors->contains($author))
            <input wire:click="UnfollowAuthor" type="submit" class="Unfollow" id="follow" value="Unfollow">
        @else
            <input wire:click="followAuthor" type="submit" class="follow" id="follow" value="follow">
        @endif
    </div>

</div>
