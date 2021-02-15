<x-layout.base>
    <div class="bg-gray-300 p-5">
        head
    </div>
    <div class="flex-1 flex">
        <div class="bg-gray-200 max-w-sm w-full p-5">nav</div>
        <div class="flex-1 bg-gray-400 p-5">{{$slot}}</div>
        <div class="bg-gray-200 max-w-sm w-full p-5">nav</div>
    </div>
    <div class="bg-gray-300 p-5">
        footer
    </div>
</x-layout.base>
