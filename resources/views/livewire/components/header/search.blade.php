<form action="/search"
      x-data="{ searchBox : true , keyword : window.Livewire.find('uTHqEBYsZrh510WEZCgx').entangle('keyword') }"
      class="items-center relative w-6/12 mx-auto lg:flex hidden z-50"
      @click.away="keyword = '' , searchBox = false" :class="searchBox ? 'z-50' : ''">
    <input x-data="" @click="searchBox = true ,  $dispatch('overlay-show')" name="search"
           wire:keyup.debounce.800ms="setKeyword($event.target.value)" type="text"
           placeholder="دنبال چی میگردی ؟"
           class="w-full py-4 bg-gray-210 rounded-xl pr-12  dark:text-white dark:bg-dark-920 placeholder-dark-550 dark:placeholder-white text-xs border-none">
    <button type="submit" class="absolute right-5">
        <svg class="text-dark-550 dark:text-white" width="16" height="17" viewBox="0 0 16 17"
             fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="7.82495" cy="7.82492" r="6.74142" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round"></circle>
            <path d="M12.5137 12.8638L15.1568 15.4999" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </button>
    <div class="absolute left-5" wire:loading="" wire:target="setKeyword">
        <svg class="w-5" version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="25 25 50 50">

            <circle class="stroke-current text-gray-300 text-opacity-30" cx="50" cy="50" r="20"
                    fill="none" stroke-width="8" stroke-linecap="round" stroke-dashoffset="0"
                    stroke-dasharray="200, 300">

            </circle>
            <circle class="stroke-current text-gray-300" cx="50" cy="50" r="20" fill="none"
                    stroke-width="8" stroke-linecap="round" stroke-dashoffset="0"
                    stroke-dasharray="100, 200">
                <animateTransform attributeName="transform" attributeType="XML" type="rotate"
                                  from="0 50 50" to="360 50 50" dur="2.5s"
                                  repeatCount="indefinite"></animateTransform>
                <animate attributeName="stroke-dashoffset" values="0;-30;-124" dur="1.25s"
                         repeatCount="indefinite"></animate>
                <animate attributeName="stroke-dasharray" values="0,200;110,200;110,200" dur="1.25s"
                         repeatCount="indefinite"></animate>
            </circle>
        </svg>
    </div>
</form>
