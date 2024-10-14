<?php

// app/Policies/TaskPolicy.php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Déterminer si l'utilisateur peut mettre à jour la tâche.
     */
    public function update(User $user, Task $task)
    {
        // L'utilisateur peut mettre à jour uniquement ses propres tâches
        return $task->user_id === $user->id;
    }

    /**
     * Déterminer si l'utilisateur peut supprimer la tâche.
     */
    public function delete(User $user, Task $task)
    {
        // L'utilisateur peut supprimer uniquement ses propres tâches
        return $task->user_id === $user->id;
    }
}

