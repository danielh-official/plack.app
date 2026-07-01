<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorkspaceRequest;
use App\Models\User;
use \App\Actions\CreateWorkspace;
use Illuminate\Container\Attributes\CurrentUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final readonly class WorkspaceController
{
    public function store(
        CreateWorkspaceRequest $request,
        #[CurrentUser] User $user,
        CreateWorkspace $createWorkspace,
    ): RedirectResponse {
        $name = $request->string('name')->value();

        $createWorkspace->handle($user, $name);

        return back();
    }
}
