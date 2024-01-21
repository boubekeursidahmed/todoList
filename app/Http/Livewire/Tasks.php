<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Livewire\WithPagination;

class Tasks extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['taskAdded' => '$refresh'];

    public function render()
    {
        // $tasks = auth()->user()->tasks()->paginate(10);
        $tasks = Task::paginate(10);

        return view('livewire.tasks', [
            'tasks' => $tasks
        ]);
    }
}
