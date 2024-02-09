<?php

namespace App\Http\Controllers;

use App\Http\Resources\RoleResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

use function Ramsey\Uuid\v1;

class RoleController extends Controller
{
    /**
     * Construct.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('permission:roles|roles-create|roles-edit|roles-delete', ['only' => ['index']]);
        $this->middleware('permission:roles-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:roles-update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:roles-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $roles = Role::with(['users', 'permissions']);
            return DataTables::of($roles)->toJson();
        }
        return view('pages.auth.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::whereNull('parent_id')->get();
        foreach ($permissions as $permission) {
            $permission->actions = Permission::where('parent_id', $permission->id)->get();
        }
        return view('pages.auth.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
            'permissions' => 'required|array',
            'permissions.*' => 'required|exists:permissions,name'
        ]);

        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permissions);
        return response()->json([
            'status' => 'success',
            'message' => 'Role created successfully',
            'data' => $role
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::whereNull('parent_id')->get();
        foreach ($permissions as $permission) {
            $permission->actions = Permission::where('parent_id', $permission->id)->get();
        }
        $permission_count = Permission::count();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id')
            ->all();

        return view('pages.auth.roles.edit', compact('role', 'permissions', 'permission_count', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,' .  $id,
            'permissions' => 'required|array',
            'permissions.*' => 'required|exists:permissions,name'
        ]);

        $role = Role::findOrFail($id);
        $role->update(['name' => $request->name]);
        $role->syncPermissions($request->permissions);
        return response()->json([
            'status' => 'success',
            'message' => 'Role updated successfully',
            'data' => $role
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $ids = explode(",", $request->ids);
        Role::whereIn('id', $ids)->delete();
        return response()->json([
            "status" => "success",
            "data" => null
        ]);
    }
}
