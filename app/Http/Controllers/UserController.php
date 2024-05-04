<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function form_register(Request $request){
        return view  ('authentification.register');

    }
    public function form_login(Request $request){

        return view  ('authentification.login');

    }

    public function traitement_register(Request $request)
    {
        $request->validate([
            'email' => 'email|required|unique:users',
            'password' =>'required|min:8',
            'name' => 'required',

        ]);
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt( $request->input('password'));
        $user->name = $request->input('name');

        $user->save();
        return back()->with('status','votre compte est bien creer');

    }

    public function traitement_login(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' =>'required|min:8',
        ]);
        $user = User::where('email', $request->input('email'))->first();
        if($user){
            if(Hash::check($request->input('password'),$user->password)){
                $request->session()->put('user',$user);
                return  redirect('/formulaire');//commande
            }else{
                return back()->with('status','identifiant ou mot de passe in correct');
            }
        }else{
            return back()->with('status','Désolé vous n\'aver pas de compte cet email');
        }

    }
    public function logout(Request $request){

        $request->session()->forget('client');
        return redirect('/login')->with('status','vous venez de vous déconnecter');
    }








































    public function index()
    {
        $users = User::get();
        return view('role-permission.user.index', ['users' => $users]);
    }

    public function create()
    {
       $roles = Role::pluck('name','name')->all();
        return view('role-permission.user.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:20',
            'roles' => 'required'
        ]);

        $user = User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                    ]);

        $user->syncRoles($request->roles);

        return redirect('/users')->with('status','User created successfully with roles');
    }

    public function edit(User $user)
    {
        $roles = Role::pluck('name','name')->all();
        $userRoles = $user->roles->pluck('name','name')->all();
        return view('role-permission.user.edit', [
            'user' => $user,
            'roles' => $roles,
            'userRoles' => $userRoles
        ]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|max:20',
            'roles' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if(!empty($request->password)){
            $data += [
                'password' => Hash::make($request->password),
            ];
        }

        $user->update($data);
        $user->syncRoles($request->roles);

        return redirect('/users')->with('status','User Updated Successfully with roles');
    }

    public function destroy($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();

        return redirect('/users')->with('status','User Delete Successfully');
    }


}
