<x-layout.base>
    <div class="bg-gray-300">
        <div class="max-w-7xl mx-auto p-5 flex justify-between">
            <div>icon</div>
            <div>nav</div>

        </div>
    </div>
    <div class="bg-blue-600 h-80 flex-shrink-0 flex items-center">
        <div class="max-w-7xl mx-auto p-5 w-full text-white">
            <h1 class="font-bold text-6xl mb-5">Jumbotron</h1>
            <p class="max-w-4xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad architecto asperiores consequuntur cumque esse et fugiat, illo ipsum
                nesciunt quam quibusdam quis quisquam recusandae, sunt veritatis, voluptatibus. Animi blanditiis, cupiditate facere minus molestias quam quia
                rerum soluta tenetur voluptatum.</p>
        </div>
    </div>
    <div class="flex-1 flex max-w-7xl mx-auto">
        <div class="flex-1 bg-gray-400 p-5">{{$slot}}</div>
    </div>
    <div class="bg-gray-300">
        <div class="max-w-7xl mx-auto p-5">footer</div>
    </div>
</x-layout.base>
