<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        The latest <span class="text-blue-500">PHPizza</span> News
    </h1>

    <h2 class="inline-flex mt-2">A blog by Jeff Tocco</h2>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-6">
        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-custom-drop>
                <x-slot name="trigger">
                    <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-35 text-left flex lg:inline-flex">
                        {{ isset($currentTopping) ? ucwords($currentTopping->name) : 'Toppings' }}

                        <x-arrow-down class="absolute pointer-events-none" />
                    </button>
                </x-slot>
                <x-custom-drop-item href="/" :active="request()->routeIs('home')">All</x-custom-drop-item>

                <!--bind the display of this div to the truth value of the x-data div -->
                @foreach ($toppings as $topping)
                    <x-custom-drop-item href="/?topping={{ $topping->slug }}"
                        :active='request()->is("toppings/{$topping->slug}")'>{{ ucwords($topping->name) }}
                    </x-custom-drop-item>
                @endforeach
            </x-custom-drop>
        </div>

        <!-- Other Filters -->
        {{-- <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22"
                viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                    </path>
                </g>
            </svg>
        </div> --}}

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                    class="bg-transparent placeholder-black font-semibold text-sm"
                    value="{{request('search')}}"
                    >
            </form>
        </div>
    </div>
</header>
