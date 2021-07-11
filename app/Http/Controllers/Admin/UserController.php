<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Hash, Auth;

class UserController extends Controller
{
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request)
    {
        $credenciales = $this->validate($request, [
            'email' => ['email', 'required'],
            'password' => 'required',
        ]);
        $user = Auth::attempt($credenciales);

        if (!$user) {

            return redirect()->back()->with('message', 'Alguno de los campos es incorrecto')->with('type', 'warning');
        }

        $request->session()->regenerate();

        return redirect()->route('panel');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }

    public function index()
    {


        $users = User::where('id', '!=', Auth::user()->id)->get();
        return view('admin.usuarios.index', compact('users'));
    }

    public function create()
    {
        $user = new User();
        $roles = self::haveRoles($user);
        return view('admin.usuarios.create', compact('user', 'roles'));
    }

    public function edit(User $user)
    {
        $roles = $this->haveRoles($user);
        return view('admin.usuarios.edit', compact('user', 'roles'));
    }

    public function store(Request $req)
    {
        // validate request
        $req->validate([
            'name' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6'],
        ]);
        // extract data
        $data = $req->except('_token');

        //create a new user
        $user =  User::create($data);

        $user->roles()->sync($data['roles']);
        // redirect back
        return back()->with('message', 'Usuario creado exitosamente')->with('type', 'success');
    }

    public function destroy(User $user)
    {
        //delete user on database
        $user->delete();
        // redirect back
        return back()->with('message', 'Usuario eliminado exitosamente')->with('type', 'success');
    }

    public function profile()
    {
        return view('admin.perfil.profile');
    }

    public function updateDataUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
        ]);

        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;

        Auth::user()->update();

        return back()->with('message', 'Actualizado correctamente')->with('type', 'success');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:6'],
            'confirm' => ['required', 'string']
        ]);
        if (!Hash::check($request->confirm, Auth::user()->password)) return back()->with('message', 'La clave confirmada no es valida')->with('type', 'danger');

        Auth::user()->password = $request->password;

        return back()->with('message', 'La clave se actualizo correctamente')->with('type', 'success');
    }

    /**
     * Undocumented function
     *
     * @param [type] $user
     * @return array
     */
    public static function haveRoles($user): array
    {
        // get all roles
        $roles = Role::all();
        // get user roless
        $haveRole = $user->roles()->get();
        // create empty array
        $data = [];
        foreach ($roles as $key => $rol) {
            //verify if exists users with roles
            if ($haveRole->contains($rol)) {
                $data[$rol->name]['check'] = true;
            } else {
                $data[$rol->name]['check'] = false;
            }
            $data[$rol->name]['id'] = $rol->id;
        }

        return $data;
    }
}
