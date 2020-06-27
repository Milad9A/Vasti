<div>
    @if (Illuminate\Support\Facades\Auth::user()->followsAuthors->contains($author))
        <input wire:click="UnfollowAuthor" type="submit" class="Unfollow" id="follow" value="Unfollow">
    @else
        <input wire:click="followAuthor" type="submit" class="follow" id="follow" value="follow">
    @endif
</div>
