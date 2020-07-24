<div>
    <div class="follow-btn-followers">
        <div>
            @auth
                @if (Illuminate\Support\Facades\Auth::user()->followsAuthors->contains($author))
                    <input wire:click="UnfollowAuthor" type="submit" class="Unfollow" id="follow" value="Unfollow">
                @else
                    <input wire:click="followAuthor" type="submit" class="follow" id="follow" value="follow">
                @endif
            @else
                <form action="{{  route('site.login') }}">
                    <input wire:click="followAuthor" type="submit" class="follow" id="follow" value="follow">
                </form>
            @endauth
        </div>
    </div>
</div>
