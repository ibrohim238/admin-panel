<?php

namespace App\Http\Controllers\Admins;

use App\Contracts\UserServiceContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\UserRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(): Factory|View|Application
    {
        $users = User::query()->paginate(12);

        return view('admin.pages.users.index', compact('users'));
    }

    public function show(User $user): Factory|View|Application
    {
        return view('admin.pages.users.show', compact('user'));
    }

    public function create(): Factory|View|Application
    {
        return view('admin.pages.users.create');
    }

    public function store(UserRequest $request, UserServiceContract $userService): RedirectResponse
    {
        $userService->save(new User(), $request);

        return redirect()->route('admin.user.index');
    }

    public function update(User $user, UserRequest $request, UserServiceContract $userService): RedirectResponse
    {
        $userService->save($user, $request);

        return back();
    }

}
