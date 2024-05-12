<div wire:key="{{ $todo->id }}"
    class="border-t-2 p-8 border-sky-400 mt-5 hover:shadow-md transition duration-500 ease-in-out">
    <div class="flex justify-between ">
        <div>
            @if ($todo->is_complete)
                <input type="checkbox" wire:click="toggelCheckBox({{ $todo->id }})" checked>
            @else
                <input type="checkbox" wire:click="toggelCheckBox({{ $todo->id }})">
            @endif
            @if ($editingTodoId === $todo->id)
                <input type="text" wire:model="editingTodoName"
                    class="outline-double outline-3 outline-offset-2 outline-blue-500 p-1 rounded-sm ml-2"
                    value="{{ $todo->name }}">
                @error('editingTodoName')
                <span class="text-red-500 mt-2 block">
                    {{ $message }}
                </span>
            @enderror
            @else
                <span class="ml-2">{{ $todo->name }}</span>
            @endif
        </div>
        <div>
            <button wire:click="edit({{ $todo->id }})">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-6 inline-block text-green-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
            </button>
            <button wire:click="delete({{ $todo->id }})">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-6 inline-block text-red-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </button>
        </div>
    </div>
    <div class="mt-2">{{ $todo->created_at }}</div>
    @if ($editingTodoId === $todo->id)
        <div class="mt-3">
            <button wire:click="updateTodo" class=" bg-green-500 py-2 px-3 rounded-md text-white mt-2 text-sm hover:bg-green-600">Update</button>
            <button wire:click="editCancel" class=" bg-red-500 py-2 px-3 rounded-md text-white mt-2 text-sm hover:bg-red-600">Cancel</button>
        </div>
    @endif
</div>
