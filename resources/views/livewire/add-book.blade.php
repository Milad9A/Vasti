<div>
    @auth
        @if (Illuminate\Support\Facades\Auth::user()->books->contains($book) || $clicked)
            <div class="dropdown">
                <select wire:model="status_id" id="status-book">
                    @foreach (App\Status::all() as $status)
                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                    @endforeach
                </select>
                <i class="fa fa-caret-down"></i>
            </div>
        @else
            <input wire:click="addBook" type="submit" value="Add to list" class="add-to-list">
        @endif
    @else
        <form action="{{  route('site.login') }}">
            <input type="submit" value="Add to list">
        </form>
    @endauth
</div>
