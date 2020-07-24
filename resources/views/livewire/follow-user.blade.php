<div>
    <div class="follow-btn-followers">
        <div>
            @auth
                @if (Illuminate\Support\Facades\Auth::user()->followsUsers->contains($user))
                    <input wire:click="UnfollowUser" type="submit" class="Unfollow" id="follow" value="Unfollow">
                @else
                    <input wire:click="followUser" type="submit" class="follow" id="follow" value="follow">
                @endif
            @else
                <form action="{{  route('site.login') }}">
                    <input wire:click="followUser" type="submit" class="follow" id="follow" value="follow">
                </form>
            @endauth
        </div>
    </div>
</div>
