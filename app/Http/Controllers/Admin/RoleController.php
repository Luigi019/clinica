<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public $permission;

    public function __construct()
    {
        $this->permission = [];
    }

    public function index()
    {
        $roles=	Role::with('permissions')->paginate(5);
        return view('admin.roles.index',compact('roles'));
    }

    public function create()
    {
        $role = new Role;
		$permissions = Permission::all();
		foreach ($permissions as $permiso) {
			$this->permission[$permiso->name]['check'] = false;
			$this->permission[$permiso->name]['id'] = $permiso->id;
		}
		$permission_check =$this->permission;
        return view('admin.roles.create',compact('role','permission_check'));
    }

    public function store(Request $rol)
    {
        $role = Role::create($rol->all());

		$role->syncPermissions($rol->permission);

		return redirect()->route('roles.listar');
    }

    public function destroy(Role $role){
		$role->delete();
        return redirect()->route('roles.listar');
	}
}
