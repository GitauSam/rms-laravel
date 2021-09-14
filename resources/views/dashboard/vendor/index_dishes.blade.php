{{-- dd($dishes[0]->vendor()) --}}
<x-dashboard-layout>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Ingredients</th>
                            <th class="px-4 py-3">Price</th>
                            <th class="px-4 py-3">No Of Images</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach($dishes as $dish)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 border">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-black">{{ $dish->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-ms font-semibold border">{{ $dish->ingredients }}</td>
                                <td class="px-4 py-3 text-sm border">{{ $dish->price }}</td>
                                <td class="px-4 py-3 text-sm border">{{ count($dish->dishImages) }}</td>
                                <td class="px-4 py-3 text-sm border">{{ $dish->created_at }}</td>
                                <td class="px-4 py-3 text-sm border flex flex-col">
                                    <a class="w-18 text-center rounded-sm my-1 mx-1 px-3 py-1 bg-yellow-500 hover:bg-yellow-800 focus:shadow-outline focus:outline-none" 
                                        href="{{ route('vendor.show-dish', $dish->id) }}">
                                        Show
                                    </a>
                                    <!-- <a class="w-18 text-center rounded-sm my-1 mx-1 px-3 py-1 bg-green-500 hover:bg-green-800 focus:shadow-outline focus:outline-none" 
                                        href="#">
                                        Edit
                                    </a> -->
                                    <a class="w-18 text-center rounded-sm mx-1 my-1 px-3 py-1 bg-red-500 hover:bg-red-800 focus:shadow-outline focus:outline-none"
                                        href="{{ route('dish.delete', $dish->id) }}"
                                    >
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
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

            document.getElementById("tab2").classList.remove("text-black")
            document.getElementById("tab2").classList.add("text-gray-500")
            document.getElementById("tab2").classList.remove("bg-gradient-to-r")
            document.getElementById("tab2").classList.remove("from-white")
            document.getElementById("tab2").classList.remove("to-gray-300")
            document.getElementById("tab2").classList.remove("border-r-4")
            document.getElementById("tab2").classList.remove("border-black")
            document.getElementById("tab2").classList.remove("dark:from-gray-700")
            document.getElementById("tab2").classList.remove("dark:to-gray-800")
            document.getElementById("tab2").classList.remove("border-r-4")
            document.getElementById("tab2").classList.remove("border-black")

            document.getElementById("tab3").classList.add("text-black")
            document.getElementById("tab3").classList.remove("text-gray-500")
            document.getElementById("tab3").classList.add("bg-gradient-to-r")
            document.getElementById("tab3").classList.add("from-white")
            document.getElementById("tab3").classList.add("to-gray-300")
            document.getElementById("tab3").classList.add("border-r-4")
            document.getElementById("tab3").classList.add("border-black")
            document.getElementById("tab3").classList.add("dark:from-gray-700")
            document.getElementById("tab3").classList.add("dark:to-gray-800")
            document.getElementById("tab3").classList.add("border-r-4")
            document.getElementById("tab3").classList.add("border-black")

            document.getElementById("tab4").classList.remove("text-black")
            document.getElementById("tab4").classList.add("text-gray-500")
            document.getElementById("tab4").classList.remove("bg-gradient-to-r")
            document.getElementById("tab4").classList.remove("from-white")
            document.getElementById("tab4").classList.remove("to-gray-300")
            document.getElementById("tab4").classList.remove("border-r-4")
            document.getElementById("tab4").classList.remove("border-black")
            document.getElementById("tab4").classList.remove("dark:from-gray-700")
            document.getElementById("tab4").classList.remove("dark:to-gray-800")
            document.getElementById("tab4").classList.remove("border-r-4")
            document.getElementById("tab4").classList.remove("border-black")

            document.getElementById("tab5").classList.remove("text-black")
            document.getElementById("tab5").classList.add("text-gray-500")
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