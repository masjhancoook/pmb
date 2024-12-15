<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function render()
    {
        $title = 'Permission';
        $permissions = Permission::latest()->get();
        return view('auth.permission.index', ['title' => $title, 'permissions' => $permissions]);
    }

    public function create()
    {
        return view('auth.permission.create');
    }
}
