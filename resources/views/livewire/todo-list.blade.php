<div>
    {{-- The best athlete wants his opponent at his best. --}}
    @if (session('error'))
        <div class="bg-red-300 border-t-4 border-red-700 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg></div>
                <div>
                    <p class="font-bold">{{ session('error') }}</p>
                </div>
            </div>
        </div>
    @endif
    <main class="flex flex-col items-center">
        <!-- create todo form start  -->
        @include('livewire.includes.todo-create')
        <!-- create todo form end  -->

        <!-- serach box start  -->
        @include('livewire.includes.todo-search')
        <!-- serach box end  -->

        <!-- todo data start  -->
        <div class="w-4/5 md:w-3/6 lg:w-2/6 ">
            @if (session('delete'))
                <div class="bg-red-300 text-center text-md font-bold py-2 rounded-md mt-5">
                    {{ session('delete') }}
                </div>
            @endif
            @if (session('update'))
                <div class="bg-green-300 text-center text-md font-bold py-2 rounded-md mt-5">
                    {{ session('update') }}
                </div>
            @endif
            @foreach ($todos as $todo)
                @include('livewire.includes.todo-card')
                <!-- todo data end  -->
            @endforeach
            <div class="mt-3">
                {{ $todos->links() }}
            </div>
        </div>
    </main>
</div>
