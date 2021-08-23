<x-dashboard-layout>
    <div class="w-full leading-loose">
        <form class="w-11/12 m-4 p-10 bg-white rounded shadow-xl" method="POST" action="{{ route('vendor.update-dish', $dish->id) }}">
            @if ($errors->any())
            <div role="alert">
                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    Danger
                </div>
                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            </div>
            @endif
            @csrf
            <p class="text-gray-800 font-medium">Dish details</p>
            <div class="">
                <label class="block text-sm text-gray-00" for="dish_name">Name</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="dish_name" name="dish_name" value="{{ $dish->name }}" type="text" required placeholder="Name" aria-label="Dish Name">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="ingredients">Ingredients</label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="ingredients" name="ingredients" value="{{ $dish->ingredients }}" type="text" required placeholder="Eggs,bacon,..." aria-label="Ingredients">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="price">Price (KES)</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="price" name="price" value="{{ $dish->price }}" type="text" required placeholder="850" aria-label="Price">
            </div>
            <div class="mt-2">
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
            </div>
            <div class="mt-4 flex flex-col items-center">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Save</button>
            </div>
        </form>
    </div>
</x-dashboard-layout>