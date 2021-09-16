<div class="min-h-screen flex flex-col justify-center items-center 
            pt-6 sm:pt-0 bg-gray-200"
>

    <div class="">
        <a class="text-black font-bold text-2xl" href="{{ url('/') }}">cafe de jnr</a>
    </div>

    <div class="w-full bg-white sm:max-w-md mt-6 px-6 py-4 shadow-lg overflow-hidden rounded-lg">
        {{ $slot }}
    </div>
</div>
