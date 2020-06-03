{{-- <div>
    <input wire:model="search" type="text" class="search-text" id="search-bar" placeholder="Type to search">
</div> --}}

<div>
    <div class="search-box">
        <div id="input-search">
            <input wire:model="search" type="text" class="search-text" id="search-bar" placeholder="Type to search">
            <i class="fa fa-close" id="close-icon"></i>
        </div>

        {{-- <img src="/icons/icons8-search.svg" alt="" height="23" width="23" class="search-btn" id="search-icon"> --}}
        <div class="search-btn" id="search-icon">
            @svg('icons/icons8-search', 'search-btn', ['id' => 'search-icon'])
        </div>
    </div>
</div>
