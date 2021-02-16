<x-layout.base>
    <div class="bg-gray-300">
        <div class="max-w-7xl mx-auto p-5 flex justify-between py-5">
            <x-elements.navigation-head/>
        </div>
    </div>
    <div class="bg-gray-600 flex-shrink-0 flex items-center py-10">
        <x-elements.jumbotron/>
    </div>
    <div class="flex-1 flex max-w-7xl mx-auto w-full">
        <div class="flex-1 bg-gray-400 p-5 pt-20">
            <x-elements.content :times="1"/>
        </div>
    </div>
    <div class="bg-gray-300">
        <div class="max-w-7xl mx-auto p-5 py-10">
            <x-elements.footer/>
        </div>
    </div>
</x-layout.base>
