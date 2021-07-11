<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Hash, Auth;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;

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
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function getFormresetPassword($token)
    {
        
        return view('Auth.resetPassword' , [
            'token' => $token
        ]);
    }


    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ]);

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ?  __($status)
            :  __($status);
    }
}
