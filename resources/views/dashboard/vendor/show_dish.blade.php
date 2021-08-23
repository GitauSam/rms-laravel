{{-- dd($dish) --}}
<x-dashboard-layout>
    <div class="w-full h-screen bg-gray-100 px-4">
        <div class="mt-4 container mx-auto">
            <div class="container mx-auto flex flex-col py-4 px-4 m-4 bg-white border-2 border-gray-300 lg:rounded lg:shadow-md">
                <div class="flex flex-col pt-6 pb-8 lg:justify-between lg:flex-row">
                    <div></div>
                    <h2 class="py-7 inline-flex items-center my-auto text-2xl sm:text-4xl font-semibold leading-tight">
                        Show Dish
                    </h2>
                    <a 
                        href="{{ route('vendor.index-dishes') }}"
                        class="w-28 h-8 text-black text-center rounded-sm 
                                my-auto py-1 bg-green-500 font-semibold
                                hover:bg-green-800 hover:text-white 
                                focus:shadow-outline focus:outline-none">
                                Back
                    </a>
                </div>
                <div class="py-2 flex flex-col">
                    <table class="table-auto w-full mx-auto border-none">
                        <tbody>
                            <tr>
                                <td class="border-b-2 px-4 py-2 w-1/5">Name:</td>
                                <td class="border-l-2 border-b-2 px-4 py-2">{{ $dish->name }}</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border-b-2 px-4 py-2">Ingredients:</td>
                                <td class="border-l-2 border-b-2 px-4 py-2">{{ $dish->ingredients }}</td>
                            </tr>
                            <tr>
                                <td class="border-b-2 px-4 py-2">Price:</td>
                                <td class="border-l-2 border-b-2 px-4 py-2">
                                    {{ $dish->price }}
                                </td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="px-4 py-2">Created On:</td>
                                <td class="border-l-2 px-4 py-2">
                                    <span> {{ \Carbon\Carbon::parse($dish->created_at)->format('M d, Y') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="w-full mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach($dish->dishImages as $key => $img)
                            @if($img->status ==  1) 
                            <div class="mt-8">
                                <a href="#">
                                    <img src="{{ asset($img->image_url) }}" alt={{ $dish->name }}
                                        class="hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="flex flex-row w-full my-8 mx-auto justify-end py-12 px-4">
                    <a href="{{ route('vendor.edit-dish', $dish->id) }}" class="ml-4 rounded-sm px-3 py-1 bg-green-500 hover:bg-green-800 focus:shadow-outline focus:outline-none">Update</a>
                    @if($dish->status == 1)
                        <a href="{{-- route('dashboard.deactivate-vendor', $dish->id) --}}" class="ml-4 rounded-sm px-3 py-1 bg-red-500 hover:bg-red-800 focus:shadow-outline focus:outline-none">Delete</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>