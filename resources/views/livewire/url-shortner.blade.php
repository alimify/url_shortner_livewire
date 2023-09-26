<div class="w-full">
    <form class="w-full max-w-sm" wire:submit="save">
    <div class="flex items-center border-b border-teal-500 py-2">
        <input wire:model="original_url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border-gray block appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="url" placeholder="Enter your long URI">
        <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
            Shorten
        </button>
    </div>
    </form>
</div>