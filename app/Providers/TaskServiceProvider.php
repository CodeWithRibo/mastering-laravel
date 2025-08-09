<?php

namespace App\Providers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Access\Response;

class TaskServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        Gate::define('view-user-task', function (User $user, Task $task){
            return $user->id === $task->user_id
                ? Response::allow()
                : Response::denyAsNotFound();
        });
    }
}
