<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Hash, Auth;

class PasswordResetController extends Controller
{
    public function ForgotPassword()
    {

    }
    public function SendLinkForgotPassword(Request $request)
    {
        $credenciales = $this->validate($request, [
            'email' => ['email', 'required'],
        ]);
        $user = User::where('email' , $request->email)->first();

        if (!$user) {

            return redirect()->back()->with('message', 'Correo no encontrado')->with('type', 'warning');
        }

        $request->session()->regenerate();

        return redirect()->route('ResetPassword');
    }
    public function ResetPassword()
    {

    }
}

