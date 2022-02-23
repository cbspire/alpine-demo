
<section x-data>
    <div class="flex items-center">
        <button class="button w-64" wire:click="increment">Increment via livewire</button>
        <h1 class="text-lg">{{ $count }}</h1>
    </div>
    <div class="flex items-center">
        <button class="button w-64" x-on:click="$wire.increment()">Increment via Alpine</button>
        <h1 class="text-lg" x-text="$wire.count"></h1>
    </div>
</section>