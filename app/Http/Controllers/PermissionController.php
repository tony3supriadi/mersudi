<?php

namespace App\Http\Controllers;

use App\Http\Resources\PermissionResource;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;

class PermissionController extends Controller
{
    /**
     * Construct.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('permission:permissions', ['only' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $permissions = Permission::with('roles')->whereNull('parent_id');
            return DataTables::of($permissions)->make();
        }

        return view('pages.auth.permissions.index');
    }
}
