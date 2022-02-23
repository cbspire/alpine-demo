<section x-data="{ search: @entangle('search') }" class="p-6 relative rounded overflow-hidden">
     <div wire:loading.delay.long class="absolute inset-0 w-full h-full rounded flex items-center justify-center bg-black text-white opacity-50 z-10">
        Processing API call...
    </div>

    <div class="flex flex-col mb-4">
        <div class="flex bg-white rounded">
            <div class="w-full">
                <input wire:model="search" type="text" class="w-full px-4 py-3 text-gray-800 rounded-full focus:outline-none">
            </div>
            <div>
                <button type="submit" class="flex items-center bg-blue-500 justify-center w-12 h-12 text-white rounded-r"
                    :class="(search.length > 0) ? 'bg-blue-500' : 'bg-gray-500 cursor-not-allowed'"
                    :disabled="search.length == 0"
                    wire:click="$emit('search')">
                    <x-heroicon-o-cog class="w-6 h-6 text-white"/>
                </button>
            </div>
        </div>
    </div>

    @if ($performance > 0)
        <div class="my-6">
        @if($performance > 90)
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-white border-8 border-green-500 border-solid">
                <span class="text-lg text-black font-bold">{{ $performance }}</span>
            </div>
        @elseif($performance > 50)
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-white border-8 border-orange-400 border-solid">
                <span class="text-lg text-black font-bold">{{ $performance }}</span>
            </div>
        @else 
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-white border-8 border-red-400 border-solid">
                <span class="text-lg text-black font-bold">{{ $performance }}</span>
            </div>
        @endif
        </div>
    @endif
</section>
