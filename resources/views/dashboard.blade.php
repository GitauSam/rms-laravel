{{-- dd($pendingOrdersData) --}}
<x-dashboard-layout>
    <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            @if(auth()->user()->hasRole('super-admin'))
                <div class="w-full sm:w-1/2 xl:w-1/3">
                    <div class="mb-4">
                        <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center">
                                    <span class="rounded-xl relative p-2 bg-blue-100">
                                        <i class="fas fa-user-tie"></i>
                                    </span>
                                    <div class="flex flex-col">
                                        <span class="font-bold text-md text-black dark:text-white ml-2">
                                            Total users
                                        </span>
                                        <span class="text-sm text-gray-500 dark:text-white ml-2">
                                            Aggregate.
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <button class="border p-1 border-gray-200 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 1792 1792">
                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button class="text-gray-200">
                                        <svg width="25" height="25" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1088 1248v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="block m-auto">
                                <div>
                                    <span class="text-sm inline-block text-gray-500 dark:text-gray-100">
                                        Total Registered Users :
                                        <span class="text-gray-700 dark:text-white font-bold">
                                            {{ $totalUsers }}
                                        </span>
                                    </span>
                                </div>
                                <div>
                                    <span class="text-sm inline-block text-gray-500 dark:text-gray-100">
                                        Total Vendors :
                                        <span class="text-gray-700 dark:text-white font-bold">
                                            {{ $vendorCount }}
                                        </span>
                                    </span>
                                </div>
                                <div>
                                    <span class="text-sm inline-block text-gray-500 dark:text-gray-100">
                                        Total Regular Users :
                                        <span class="text-gray-700 dark:text-white font-bold">
                                            {{ $userCount }}
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="w-full sm:w-1/2 xl:w-1/3">
                <div class="mb-4">
                    <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center">
                                <span class="rounded-xl relative p-2 bg-blue-100">
                                    <!-- <svg width="25" height="25" viewBox="0 0 256 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                                        <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4">
                                        </path>
                                        <path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853">
                                        </path>
                                        <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05">
                                        </path>
                                        <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335">
                                        </path>
                                    </svg> -->
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <div class="flex flex-col">
                                    <span class="font-bold text-md text-black dark:text-white ml-2">
                                        Sales & Orders
                                    </span>
                                    <span class="text-sm text-gray-500 dark:text-white ml-2">
                                        Aggregate.
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <button class="border p-1 border-gray-200 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 1792 1792">
                                        <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                        </path>
                                    </svg>
                                </button>
                                <button class="text-gray-200">
                                    <svg width="25" height="25" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1088 1248v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mb-4 space-x-12">
                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-gray-500 bg-gray-200">
                                PROGRESS
                            </span>
                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-red-400 border border-red-400  bg-white">
                                HIGHT PRIORITY
                            </span>
                        </div>
                        <div class="block m-auto">
                            <div>
                                <span class="text-sm inline-block text-gray-500 dark:text-gray-100">
                                    Sales/Pending Orders :
                                    <span class="text-gray-700 dark:text-white font-bold">
                                        {{ $salesCount }}
                                    </span>
                                    /{{ $pendingOrders }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 xl:w-1/3">
                <div class="mb-4 mx-0 sm:ml-4 xl:mr-4">
                    <div class="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full">
                        <p class="font-bold text-md p-4 text-black dark:text-white">
                            My Pending Orders
                            <span class="text-sm text-gray-500 dark:text-gray-300 dark:text-white ml-2">
                                ({{ $pendingOrders }})
                            </span>
                        </p>
                        <ul>
                            @foreach($pendingOrdersData as $po)
                            <li class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
                                <div class="flex items-center justify-start text-sm">
                                    <span class="mx-4">
                                        01
                                    </span>
                                    <span>
                                        {{ $po }}
                                    </span>
                                </div>
                                <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                                    <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                    </path>
                                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                    </path>
                                </svg>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 xl:w-1/3">
                <div class="mb-4">
                    <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700">
                        <div class="flex flex-wrap overflow-hidden">
                            <div class="w-full rounded shadow-sm">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="text-left font-bold text-xl text-black dark:text-white">
                                        September 2021
                                    </div>
                                    <div class="flex space-x-4">
                                        <button class="p-2 rounded-full bg-blue-500 text-white">
                                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M13.83 19a1 1 0 0 1-.78-.37l-4.83-6a1 1 0 0 1 0-1.27l5-6a1 1 0 0 1 1.54 1.28L10.29 12l4.32 5.36a1 1 0 0 1-.78 1.64z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button class="p-2 rounded-full bg-blue-500 text-white">
                                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M10 19a1 1 0 0 1-.64-.23a1 1 0 0 1-.13-1.41L13.71 12L9.39 6.63a1 1 0 0 1 .15-1.41a1 1 0 0 1 1.46.15l4.83 6a1 1 0 0 1 0 1.27l-5 6A1 1 0 0 1 10 19z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="-mx-2">
                                    <table class="w-full dark:text-white">
                                        <tr>
                                            <th class="py-3 px-2 md:px-3 ">
                                                S
                                            </th>
                                            <th class="py-3 px-2 md:px-3 ">
                                                M
                                            </th>
                                            <th class="py-3 px-2 md:px-3 ">
                                                T
                                            </th>
                                            <th class="py-3 px-2 md:px-3 ">
                                                W
                                            </th>
                                            <th class="py-3 px-2 md:px-3 ">
                                                T
                                            </th>
                                            <th class="py-3 px-2 md:px-3 ">
                                                F
                                            </th>
                                            <th class="py-3 px-2 md:px-3 ">
                                                S
                                            </th>
                                        </tr>
                                        <tr class="text-gray-400 dark:text-gray-500">
                                            <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                                25
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                                26
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                                27
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                                28
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                                29
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                                30
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center text-gray-800 cursor-pointer">
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                2
                                            </td>
                                            <td class="py-3 relative px-1  hover:text-blue-500 text-center cursor-pointer">
                                                3
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                4
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                5
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                6
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                7
                                            </td>
                                            <td class="py-3 px-2 md:px-3 md:px-2 relative lg:px-3 hover:text-blue-500 text-center cursor-pointer">
                                                8
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                9
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                10
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                11
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                12
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-center hover:text-blue cursor-pointer">
                                                13
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-white text-center cursor-pointer">
                                                <span class="p-2 rounded-full bg-blue-500">
                                                    14
                                                </span>
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                15
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                16
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                17
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                18
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                19
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                20
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                21
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                22
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                23
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                24
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 relative text-center cursor-pointer">
                                                25
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                26
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                27
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                28
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                29
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                30
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        console.log("embedded")

        function setActiveTab() {
            console.log("activated")
            console.log("in tab 1");
            document.getElementById("tab1").classList.remove("text-gray-500")
            document.getElementById("tab1").classList.add("text-black")
            document.getElementById("tab1").classList.add("bg-gradient-to-r")
            document.getElementById("tab1").classList.add("from-white")
            document.getElementById("tab1").classList.add("to-gray-300")
            document.getElementById("tab1").classList.add("border-r-4")
            document.getElementById("tab1").classList.add("border-black")
            document.getElementById("tab1").classList.add("dark:from-gray-700")
            document.getElementById("tab1").classList.add("dark:to-gray-800")
            document.getElementById("tab1").classList.add("border-r-4")
            document.getElementById("tab1").classList.add("border-black")

            document.getElementById("tab2").classList.add("text-gray-500")
            document.getElementById("tab2").classList.remove("text-black")
            document.getElementById("tab2").classList.remove("bg-gradient-to-r")
            document.getElementById("tab2").classList.remove("from-white")
            document.getElementById("tab2").classList.remove("to-gray-300")
            document.getElementById("tab2").classList.remove("border-r-4")
            document.getElementById("tab2").classList.remove("border-black")
            document.getElementById("tab2").classList.remove("dark:from-gray-700")
            document.getElementById("tab2").classList.remove("dark:to-gray-800")
            document.getElementById("tab2").classList.remove("border-r-4")
            document.getElementById("tab2").classList.remove("border-black")

            document.getElementById("tab3").classList.add("text-gray-500")
            document.getElementById("tab3").classList.remove("text-black")
            document.getElementById("tab3").classList.remove("bg-gradient-to-r")
            document.getElementById("tab3").classList.remove("from-white")
            document.getElementById("tab3").classList.remove("to-gray-300")
            document.getElementById("tab3").classList.remove("border-r-4")
            document.getElementById("tab3").classList.remove("border-black")
            document.getElementById("tab3").classList.remove("dark:from-gray-700")
            document.getElementById("tab3").classList.remove("dark:to-gray-800")
            document.getElementById("tab3").classList.remove("border-r-4")
            document.getElementById("tab3").classList.remove("border-black")

            document.getElementById("tab4").classList.add("text-gray-500")
            document.getElementById("tab4").classList.remove("text-black")
            document.getElementById("tab4").classList.remove("bg-gradient-to-r")
            document.getElementById("tab4").classList.remove("from-white")
            document.getElementById("tab4").classList.remove("to-gray-300")
            document.getElementById("tab4").classList.remove("border-r-4")
            document.getElementById("tab4").classList.remove("border-black")
            document.getElementById("tab4").classList.remove("dark:from-gray-700")
            document.getElementById("tab4").classList.remove("dark:to-gray-800")
            document.getElementById("tab4").classList.remove("border-r-4")
            document.getElementById("tab4").classList.remove("border-black")

            document.getElementById("tab5").classList.add("text-gray-500")
            document.getElementById("tab5").classList.remove("text-black")
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