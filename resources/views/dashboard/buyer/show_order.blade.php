{{ dd($order) }}
<x-dashboard-layout>
    <div class="w-full h-screen bg-gray-100 px-4">
        <div class="mt-4 container mx-auto">
            <div class="container mx-auto flex flex-col py-4 px-4 m-4 bg-white border-2 border-gray-300 lg:rounded lg:shadow-md">
                <div class="flex flex-col pt-6 pb-8 lg:justify-between lg:flex-row">
                    <div></div>
                    <h2 class="py-7 inline-flex items-center my-auto text-2xl sm:text-4xl font-semibold leading-tight">
                        Show Vendor
                    </h2>
                    <a 
                        href="{{ route('dashboard.index-vendors') }}"
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
                                <td class="border-b-2 px-4 py-2 w-1/5">Vendor Name:</td>
                                <td class="border-l-2 border-b-2 px-4 py-2">{{ $vendor->vendor_name }}</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border-b-2 px-4 py-2">Customer Name:</td>
                                <td class="border-l-2 border-b-2 px-4 py-2">{{$vendor->customer->name}}</td>
                            </tr>
                            <tr>
                                <td class="border-b-2 px-4 py-2">Customer Email:</td>
                                <td class="border-l-2 border-b-2 px-4 py-2">
                                    {{$vendor->customer->email}}
                                </td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border-b-2 px-4 py-2">ID Number:</td>
                                <td class="border-l-2 border-b-2 px-4 py-2">
                                    {{$vendor->customer->id_number}}
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b-2 px-4 py-2">Phone Number:</td>
                                <td class="border-l-2 border-b-2 px-4 py-2">
                                    {{$vendor->customer->phone_number}}
                                </td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="px-4 py-2">Created On:</td>
                                <td class="border-l-2 px-4 py-2">
                                    <span> {{ \Carbon\Carbon::parse($vendor->created_at)->format('M d, Y') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-row w-full my-8 mx-auto justify-end py-12 px-4">
                    <!-- <a href="{{-- route('orders.edit', \Illuminate\Support\Facades\Crypt::encryptString($order->id)) --}}" class="ml-4 rounded-sm px-3 py-1 bg-green-500 hover:bg-green-800 focus:shadow-outline focus:outline-none">Update</a> -->
                    @if($vendor->status == 1)
                        <a href="{{ route('dashboard.deactivate-vendor', $vendor->id) }}" class="ml-4 rounded-sm px-3 py-1 bg-red-500 hover:bg-red-800 focus:shadow-outline focus:outline-none">Delete</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>