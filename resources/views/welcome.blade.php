<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Livewire demo</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @livewireStyles
    </head>
    <body class="antialiased">
        <div class="relative items-top justify-center min-h-screen bg-gray-100 p-6">

            <livewire:counter /> 

            <livewire:page-speed />

{{--
            <div class="w-64">
                <div class="mt-6" x-data="{ open: false }">
                    <button class="button w-full" @click="open = true">Show More...</button>
            
                    <ul x-show="open" @click.away="open = false" class="bg-gray-200 rounded border border-solid border-gray-300">
                        <li>
                            <button wire:click="archive" class="w-full text-left p-2 hover:bg-slate-400">Archive</button>
                        </li>
                        <li>
                            <button wire:click="delete" class="w-full text-left p-2 hover:bg-slate-400">Delete</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
--}}

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
