<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
/**
 * Class TaskView
 *
 * @package App\Http\Livewire
 *
 * @property Task $task
 */
class TaskView extends Component
{
    public $task;

    public function mount(Task $task): void
    {
        $this->task = $task;
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.task-view');
    }
}
