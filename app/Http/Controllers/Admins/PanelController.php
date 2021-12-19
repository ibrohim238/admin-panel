<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        $userCount = User::count();

        return view('admin.pages.panel', compact('userCount'));
    }
}
