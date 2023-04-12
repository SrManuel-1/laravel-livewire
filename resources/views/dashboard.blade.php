<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('show-posts', ['title' => 'Este es un titulo de prueba']) {{-- Aqui pasamos un parametro el cual sera usado en el componente, seguido de aqui pasamos a app/http/Livewire/ShowPosts --}}
            {{-- @livewire('nav.show-posts') --}}
        </div>
    </div>
</x-app-layout>
