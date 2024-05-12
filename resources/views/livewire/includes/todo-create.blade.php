<div class=" bg-white p-8 mt-5 rounded-sm border-t-green-600 border-t-4 shadow-md w-4/5 md:w-3/6 lg:w-2/6 ">
    <div class="py-4">
        <h1 class="font-bold text-gray-500 text-xl">Create New Todo</h1>
    </div>
    <div class="w-full py-4">
        <label for="price" class="block font-bold  text-gray-900">*Todo</label>
        <div class="relative mt-2 rounded-md shadow-sm">
            <input type="text" name="price" id="price"
                class="block w-full rounded-md border-0 py-1.5 pl-3 pr-20 bg-gray-100 text-gray-900 outline-none"
                placeholder="Todo..">
        </div>
    </div>
    <div class="flex items-center">
        <button class=" bg-blue-600 rounded-md flex items-center mt-5 px-3 py-2 text-white cursor-pointer">
            <span class=" text-md font-bold">Create</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 ml-1 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>
        <!-- <div> -->
        {{-- <span class="text-red-500 mt-5 pl-4">error</span> --}}
        <!-- </div> -->
    </div>
</div>
