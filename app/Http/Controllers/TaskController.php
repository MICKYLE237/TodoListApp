<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TaskController extends Controller
{
    use AuthorizesRequests;
    public function index()
    {
        //$totalTasks = auth()->user()->tasks()->count();
        //$completedTasks = auth()->user()->tasks()->where('status', 'completed')->count();
        //$pendingTasks = auth()->user()->tasks()->where('status', 'pending')->count();
        $tasks = auth()->user()->tasks()->orderBy('created_at', 'desc')->paginate(10);

        return view('tasks.index', compact('tasks'));
    }


    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required',
        ]);

        auth()->user()->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Tâche créée avec succès !');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required',
        ]);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Tâche mise à jour avec succès !');
    }

    // Supprimer une tâche
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Tâche supprimée avec succès !');
    }
    public function markAsCompleted(Task $task)
    {
        $this->authorize('update', $task);

        $task->markAsCompleted();

        return redirect()->route('tasks.index')->with('success', 'Task marked as completed.');
    }

    public function markAsPending(Task $task)
    {
        $this->authorize('update', $task);

        $task->markAsPending();

        return redirect()->route('tasks.index')->with('success', 'Task marked as pending.');
    }
}

