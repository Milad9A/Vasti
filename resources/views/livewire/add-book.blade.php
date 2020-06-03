<div>
    @if ($user->books->contains($book) || $clicked)
        <div class="dropdown">
            <select name="" id="status-book">
                <option value="Want to Read">Want to Read</option>
                <option value="Reader">Reader</option>
                <option value="Currently Reading">Currently Reading</option>
            </select>
            <i class="fa fa-caret-down"></i>
        </div>
    @else
        <input wire:click="addBook" type="submit" value="Add to list" class="add-to-list">
    @endif
</div>
