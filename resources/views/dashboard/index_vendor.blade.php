{{-- dd($vendors[0]) --}}
<x-dashboard-layout>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Customer Name</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Phone Number</th>
                            <th class="px-4 py-3">ID Number</th>
                            <th class="px-4 py-3">Vendor Name</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach($vendors as $vendor)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 border">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-black">{{ $vendor->customer->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-ms font-semibold border">{{ $vendor->customer->email }}</td>
                                <td class="px-4 py-3 text-xs border">
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">{{ $vendor->customer->phone_number }}</span>
                                </td>
                                <td class="px-4 py-3 text-sm border">{{ $vendor->customer->id_number }}</td>
                                <td class="px-4 py-3 text-sm border">{{ $vendor->vendor_name }}</td>
                                <td class="px-4 py-3 text-sm border">{{ $vendor->customer->created_at }}</td>
                                <td class="px-4 py-3 text-sm border">
                                    <a class="w-16 text-center rounded-sm my-1 mx-1 px-3 py-1 bg-yellow-500 hover:bg-yellow-800 focus:shadow-outline focus:outline-none" 
                                        href="#">
                                        Show
                                    </a>
                                    <a class="w-16 text-center rounded-sm my-1 mx-1 px-3 py-1 bg-green-500 hover:bg-green-800 focus:shadow-outline focus:outline-none" 
                                        href="#">
                                        Edit
                                    </a>
                                    <button class="w-16 text-center rounded-sm mx-1 my-1 px-3 py-1 bg-red-500 hover:bg-red-800 focus:shadow-outline focus:outline-none">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-dashboard-layout>