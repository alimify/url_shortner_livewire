<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            <livewire:url-shortner/>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <livewire:u-list/>
            </div>
        </div>
    </div>
</x-app-layout>
