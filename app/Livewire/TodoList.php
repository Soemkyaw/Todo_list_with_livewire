<?php

namespace App\Livewire;




use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;


class TodoList extends Component
{
    use WithPagination;

    public $name;

    public $search;

    public $editingTodoId;
    public $editingTodoName;


    public function render()
    {
        return view('livewire.todo-list',[
            'todos' => Todo::latest()->where('name','like','%'.$this->search.'%')->paginate(5)
        ]);
    }

    public function createNewTodo(){
        $this->validate([
            "name" => ['required']
        ]);

        Todo::create([
            'name' => $this->name
        ]);
        $this->name = '';
        session()->flash('status', 'Todo successfully created.');
    }

    public function toggelCheckBox($todoId)
    {
        $todo = Todo::find($todoId);
        $todo->is_complete = !$todo->is_complete;
        $todo->save();
    }

    public function delete($todoId)
    {
        try {
            Todo::findOrFail($todoId)->delete();
            session()->flash('delete', 'Todo successfully deleted.');
        } catch (\Exception $e) {
            session()->flash('error', 'Fail to delete todo.');
            return;
        }
    }

    public function edit($todoId)
    {
        $this->editingTodoId = $todoId;
        $this->editingTodoName = Todo::find($todoId)->name;
    }

    public function editCancel()
    {
        $this->reset('editingTodoId','editingTodoName');
    }

    public function updateTodo()
    {
        $this->validate([
            'editingTodoName' => ['required']
        ]);
        Todo::find($this->editingTodoId)->update([
            'name' => $this->editingTodoName
        ]);

        $this->reset('editingTodoId','editingTodoName');
        session()->flash('update', 'Todo successfully updated.');
    }
}
