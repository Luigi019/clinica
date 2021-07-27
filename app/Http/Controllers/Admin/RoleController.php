<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
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
       $roles = self::haveRoles($role);
       return view('admin.roles.create',compact('roles','role'));
    }

    public function edit(Role $role)
    {
   
      $roles = self::haveRoles($role);
        return view('admin.roles.edit',compact('role','roles'));
    }

    public function update(Request $request , Role $role)
    {
        $request->validate(
            [
                'name'=>['required','alpha'],
                'permissions'=>['array']
            ]
        );

        $role->name = $request->name;
        $role->updated_at = Carbon::now();

        $role->syncPermissions($request->permission);

        $role->update();
        return back()->with('message', "Rol editado exitosamente")->with('type','success');


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

    public static function haveRoles($role) :array
    {
        // get permissions 
        $permissions = Permission::all();
        // get permissons->roles
        $have= $role->permissions()->get();
        // create empty array
        $data = [];
        foreach($permissions as $key=> $permission)
        {
            //verify if exists roles with permissions
			if ($have->contains($permission))
            {
				$data[$permission->name]['check'] = true;

			}else{
				$data[$permission->name]['check'] = false;
			}
			$data[$permission->name]['id'] = $permission->id;
		}

        return $data;

    }
}
