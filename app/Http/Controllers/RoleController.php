<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view('role.show', compact('role'));
    }



    public function index(){
        $roles = Role::get();
        return view('role-permission.role.index', [
            'roles' => $roles
        ]);
    }


 public function create(){
    return view('role-permission.role.create');
 }

 public function store(Request $request){
    $request->validate([
        'name' =>['required',
        'string',
        'unique:roles,name']
    ]);
    Role::create([
        'name' =>  $request->name
    ]);
    return redirect('roles')->with('status','role created successfuly');
 }


 public function edit(Role $role){

    return view('role-permission.role.edit',[
        'role' => $role
    ]);
 }
 public function update(Request $request, Role $role){
    $request->validate([
        'name' => [
            'required',
            'string',
            'unique:roles,name,' . $role->id // Ajout de la virgule ici
        ]
    ]);
    $role->update([
        'name' =>  $request->name
    ]);
    return redirect('roles')->with('status', 'role updated successfully');
}

public function destroy($roleId){
   $role= Role::find($roleId);
    $role->delete();
    return redirect('roles')->with('status', 'role deleted successfully');


}

public function addPermissionRole($roleId){
    $permissions = Permission::get();
    $role = Role::findOrFail($roleId);
    $rolePermissions =DB::table('role_has_permissions')-> where('role_has_permissions.role_id',$role->id)
    ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
    ->all();
    return view('role-permission.role.add-permissions',[
        'role' => $role,
        'permissions' => $permissions,
        'rolePermission'=>$rolePermissions
    ]);
}

public function givePermissionRole(Request $request,$roleId){
    $request->validate([
        'permission' => 'required|array', // Utilisez 'permission' au lieu de 'name'
        'permission.*' => 'exists:permissions,name' // Valide que chaque permission existe dans la table des permissions
    ]);


    $role = Role::findOrFail($roleId);
    $role->syncPermissions($request->permission);
    return redirect()->back()->with('status','Permissions added to role');

}

}
