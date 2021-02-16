@section('css-after')
    <style>
        .square {
            position: relative;
            width: 100%;
        }

        .square:after {
            content: "";
            display: block;
            padding-bottom: 100%;
        }
    </style>
@endsection
<x-layout.base>
    <div class="bg-gray-300">
        <div class="max-w-7xl mx-auto p-5 flex justify-between py-5">
            <x-elements.navigation-head/>
        </div>
    </div>
    <div class="bg-gray-600 py-10 flex-shrink-0 flex items-center">
        <x-elements.jumbotron/>
    </div>
    <div class="flex-1 flex max-w-7xl mx-auto w-full">
        <div class="flex-1 p-5 flex flex-col justify-center">
            <div class="grid grid-cols-4 gap-5">
                @for ($i = 0; $i < 8; $i++)
                    <div class="bg-gray-400 square"></div>
                @endfor
            </div>
        </div>
    </div>
    <div class="bg-gray-300">
        <div class="max-w-7xl mx-auto p-5 py-10">
            <x-elements.footer/>
        </div>
    </div>
</x-layout.base>
