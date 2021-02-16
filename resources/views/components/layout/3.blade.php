<x-layout.base>
    <div class="max-w-7xl mx-auto w-full h-screen flex flex-col">
        <div class="bg-gray-300 p-5 flex-shrink-0 flex justify-between">
            <x-elements.navigation-head/>
        </div>
        <div class="flex-1 flex">
            <div class="bg-gray-200 max-w-xs w-full p-5">
                <x-elements.navigation-sidebar/>
            </div>
            <div class="flex-1 bg-gray-400 p-5"><x-elements.content :times="2"/></div>
        </div>
        <div class="bg-gray-300 p-5 flex-shrink-0 py-10">
            <x-elements.footer/>
        </div>
    </div>
</x-layout.base>
