<x-layout.base>
    <div class="bg-gray-300 p-5 flex-shrink-0 flex justify-between">
        <x-elements.navigation-head/>
    </div>
    <div class="flex-1 flex">
        <div class="bg-gray-200 max-w-sm w-full p-5">
            <x-elements.navigation-sidebar/>
        </div>
        <div class="flex-1 bg-gray-400 p-10">
            <x-elements.content/>
        </div>
        <div class="bg-gray-200 max-w-sm w-full p-5">
            <div class="opacity-60">
                <x-elements.navigation-sidebar/>
            </div>
        </div>
    </div>
    <div class="bg-gray-300 p-5 py-10 flex-shrink-0">
        <x-elements.footer/>
        <x-elements.footer/>
    </div>
</x-layout.base>
