{{-- dd($dishes[0]->vendor->vendor) --}}
<x-dashboard-layout>
    <div x-data="{ mod: true }">
        <header x-show="!mod" class="w-full shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40">
            <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                    <div class="container relative left-0 z-50 flex w-3/4 h-auto h-full">
                        <div class="relative flex items-center w-full lg:w-64 h-full group">
                            <div class="absolute z-50 flex items-center justify-center block w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden">
                                <svg fill="none" class="relative w-5 h-5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <svg class="absolute left-0 z-20 hidden w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                </path>
                            </svg>
                            <input type="text" class="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 ring-opacity-90 bg-gray-100 dark:bg-gray-800 text-gray-400 aa-input" placeholder="Search" />
                            <div class="absolute right-0 hidden h-auto px-2 py-1 mr-2 text-xs text-gray-400 border border-gray-300 rounded-2xl md:block">
                                +
                            </div>
                        </div>
                    </div>
                    <div class="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                        <a href="#" class="block relative">
                            <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-10 w-10 " />
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($dishes as $dish)
            <div class="mt-8 bg-white rounded w-60">
                <a href="{{-- route('movies.show', $movie['id']) --}}">
                    <img src="{{ asset($dish->dishImages[0]->image_url) }}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2 p-4">
                    <a href="{{-- route('movies.show', $movie['id']) --}}" class="text-lg mt-2 hover:text-gray:300">
                        {{ $dish->name }}
                    </a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <!-- <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                            <g data-name="Layer 2">
                                <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                            </g>
                        </svg> -->
                        <i class="fas fa-hotel"></i>
                        <span class="ml-1">{{ $dish->vendor->vendor->vendor_name }}</span>
                        <!-- <div class="mx-2">{{ $dish->price }}</div> -->
                        <!-- <span>{{-- \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') --}} placeholder date</span> -->
                    </div>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <!-- <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                            <g data-name="Layer 2">
                                <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                            </g>
                        </svg> -->
                        <i class="fas fa-tags"></i>
                        <span class="ml-1">Kes</span>
                        <div class="mx-2">{{ $dish->price }}</div>
                        <!-- <span>{{-- \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') --}} placeholder date</span> -->
                    </div>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <!-- <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                            <g data-name="Layer 2">
                                <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star" />
                            </g>
                        </svg> -->
                        <i class="fas fa-clipboard-list"></i>
                        <span class="ml-1">Ingredients:</span>
                        <span class="mx-2 overflow-ellipsis">{{ $dish->ingredients }}</span>
                        <!-- <span>{{-- \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') --}} placeholder date</span> -->
                    </div>
                    <div class="text-gray-400 text-sm mt-4 mb-2 flex">
                        <a href="{{ route('dishes.order', $dish->id) }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 w-full rounded text-center">Order</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <!-- <div x-show="mod" id="map" class="fixed z-10 inset-0 overflow-y-auto h-96 w-full" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARUNvMUJUcsVZPZIw1SienruS93M85wUs&callback=initMap&libraries=&v=weekly" async></script>
        </div> -->
    </div>
    <!-- <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: -25.344, lng: 131.036 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
    </script> -->
    <script>
        console.log("embedded")
        function setActiveTab() {
            console.log("activated")
            console.log("tab 2")

            document.getElementById("tab1").classList.remove("text-black")
            document.getElementById("tab1").classList.add("text-gray-500")
            document.getElementById("tab1").classList.remove("bg-gradient-to-r")
            document.getElementById("tab1").classList.remove("from-white")
            document.getElementById("tab1").classList.remove("to-gray-300")
            document.getElementById("tab1").classList.remove("border-r-4")
            document.getElementById("tab1").classList.remove("border-black")
            document.getElementById("tab1").classList.remove("dark:from-gray-700")
            document.getElementById("tab1").classList.remove("dark:to-gray-800")
            document.getElementById("tab1").classList.remove("border-r-4")
            document.getElementById("tab1").classList.remove("border-black")

            document.getElementById("tab2").classList.add("text-black")
            document.getElementById("tab2").classList.remove("text-gray-500")
            document.getElementById("tab2").classList.add("bg-gradient-to-r")
            document.getElementById("tab2").classList.add("from-white")
            document.getElementById("tab2").classList.add("to-gray-300")
            document.getElementById("tab2").classList.add("border-r-4")
            document.getElementById("tab2").classList.add("border-black")
            document.getElementById("tab2").classList.add("dark:from-gray-700")
            document.getElementById("tab2").classList.add("dark:to-gray-800")
            document.getElementById("tab2").classList.add("border-r-4")
            document.getElementById("tab2").classList.add("border-black")

            document.getElementById("tab3").classList.remove("text-black")
            document.getElementById("tab3").classList.add("text-gray-500")
            document.getElementById("tab3").classList.remove("bg-gradient-to-r")
            document.getElementById("tab3").classList.remove("from-white")
            document.getElementById("tab3").classList.remove("to-gray-300")
            document.getElementById("tab3").classList.remove("border-r-4")
            document.getElementById("tab3").classList.remove("border-black")
            document.getElementById("tab3").classList.remove("dark:from-gray-700")
            document.getElementById("tab3").classList.remove("dark:to-gray-800")
            document.getElementById("tab3").classList.remove("border-r-4")
            document.getElementById("tab3").classList.remove("border-black")

            document.getElementById("tab4").classList.add("text-black")
            document.getElementById("tab4").classList.remove("text-gray-500")
            document.getElementById("tab4").classList.remove("bg-gradient-to-r")
            document.getElementById("tab4").classList.remove("from-white")
            document.getElementById("tab4").classList.remove("to-gray-300")
            document.getElementById("tab4").classList.remove("border-r-4")
            document.getElementById("tab4").classList.remove("border-black")
            document.getElementById("tab4").classList.remove("dark:from-gray-700")
            document.getElementById("tab4").classList.remove("dark:to-gray-800")
            document.getElementById("tab4").classList.remove("border-r-4")
            document.getElementById("tab4").classList.remove("border-black")

            document.getElementById("tab5").classList.add("text-black")
            document.getElementById("tab5").classList.remove("text-gray-500")
            document.getElementById("tab5").classList.remove("bg-gradient-to-r")
            document.getElementById("tab5").classList.remove("from-white")
            document.getElementById("tab5").classList.remove("to-gray-300")
            document.getElementById("tab5").classList.remove("border-r-4")
            document.getElementById("tab5").classList.remove("border-black")
            document.getElementById("tab5").classList.remove("dark:from-gray-700")
            document.getElementById("tab5").classList.remove("dark:to-gray-800")
            document.getElementById("tab5").classList.remove("border-r-4")
            document.getElementById("tab5").classList.remove("border-black")

        }

        setActiveTab()
    </script>
</x-dashboard-layout>