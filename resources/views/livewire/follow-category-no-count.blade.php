<div>
    <div class="follow-btn-followers">
        <div>
            @auth
                @if (Illuminate\Support\Facades\Auth::user()->followsCategories->contains($category))
                    <input wire:click="UnfollowCategory" type="submit" class="Unfollow" id="follow" value="Unfollow">
                @else
                    <input wire:click="followCategory" type="submit" class="follow" id="follow" value="follow">
                @endif
            @else
                <form action="{{  route('site.login') }}">
                    <input wire:click="followCategory" type="submit" class="follow" id="follow" value="follow">
                </form>
            @endauth
        </div>
    </div>
</div>
