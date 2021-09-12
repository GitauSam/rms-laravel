<x-dashboard-layout>
<div class="w-full leading-loose">
  <form class="w-11/12 m-4 p-10 bg-white rounded shadow-xl" method="POST" action="{{ route('dashboard.add-vendor') }}">
    @csrf
    <p class="text-gray-800 font-medium">Vendor information</p>
    <div class="">
      <label class="block text-sm text-gray-00" for="customer_name">Customer Name</label>
      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="customer_name" name="customer_name" type="text" required placeholder="Customer Name" aria-label="Customer Name">
    </div>
    <div class="mt-2">
      <label class="block text-sm text-gray-600" for="customer_email">Email</label>
      <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="customer_email" name="customer_email" type="email" required placeholder="Customer Email" aria-label="Customer Email">
    </div>
    <div class="mt-2">
      <label class="block text-sm text-gray-600" for="customer_phone_number">Phone Number</label>
      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="customer_phone_number" name="customer_phone_number" type="text" required placeholder="Phone Number" aria-label="Customer Phone Number">
    </div>
    <div class="mt-2">
      <label class="block text-sm block text-gray-600" for="customer_id_number">ID Number</label>
      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="customer_id_number" name="customer_id_number" type="text" required placeholder="ID Number" aria-label="Customer ID Number">
    </div>
    <div class="mt-2">
      <label class="block text-sm text-gray-600" for="cus_email">Password</label>
      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" required placeholder="Password" aria-label="Password">
    </div>
    <div class="mt-2">
      <label class="block text-sm text-gray-600" for="cus_email">Vendor Name</label>
      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="vendor_name"  name="vendor_name" type="text" required placeholder="Vendor Name" aria-label="Vendor Name">
    </div>
    <div class="mt-4 flex flex-col items-center">
      <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Save</button>
    </div>
  </form>
</div>
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