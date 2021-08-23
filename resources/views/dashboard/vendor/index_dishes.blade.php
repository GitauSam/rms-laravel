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
                                        href="#"
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
</x-dashboard-layout>