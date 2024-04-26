<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\ClientController;

use App\Http\Controllers\Client\CommandeController;
use App\Http\Controllers\Client\DomicileController;

Use App\Http\Controllers\Livreur\LivreurController;
Use App\Http\Controllers\Livreur\FormulaireController;

Use App\Http\Controllers\Garcon\GarconController;
Use App\Http\Controllers\Garcon\GarconformulaireController;
Use App\Http\Controllers\Pointrelai\PointrelaiController;
Use App\Http\Controllers\Pointrelai\PointrelaiformulaireController;
Use App\Http\Controllers\Admin\AdminController;


Route::get('/', function () {
    return view('welcome');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('registeer', 'register')->name('registeer');

    Route::post('registeer', 'registerSave')->name('registeer');
    Route::get('admin', 'login')->name('admin');
    Route::post('admin', 'loginAction')->name('admin');



    Route::get('logout', 'logout')->middleware('auth')->name('logout');});

Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::delete('/logout',[AuthController::class, 'logout'])->name('logout');
Route::view('home','home');




Route::get('/login',[ClientController::class,'form_login'])->name('login');
Route::get('/register',[ClientController::class,'form_register'])->name('register');

Route::post('/register/traitement',[ClientController::class,'traitement_register']);

Route::post('/login/traitement',[ClientController::class,'traitement_login']);


Route::get('/commande',[CommandeController::class,'form_espace'])->name('commande');

Route::post('/commande/traitement',[CommandeController::class,'traitement_espace']);

Route::get('/domicile', [DomicileController::class, 'form_domicile'])->name('domicile');
Route::post('/domicile/traitement',[DomicileController::class,'traitement_domicile']);



Route::get('/livreur/login',[LivreurController::class,'form_login'])->name('livreur/login');
Route::get('/livreur/register',[LivreurController::class,'form_register'])->name('livreur/register');

Route::post('/livreur/register/traitement',[LivreurController::class,'traitement_register']);

Route::post('/livreur/login/traitement',[LivreurController::class,'traitement_login']);


Route::get('/formulaire',[FormulaireController::class,'form_formulaire'])->name('formulaire');

Route::post('/formulaire/traitement',[FormulaireController::class,'traitement_formulaire']);



Route::get('/garcon/login',[GarconController::class,'form_login'])->name('garcon/login');
Route::get('/garcon/register',[GarconController::class,'form_register'])->name('garcon/register');

Route::post('/garcon/register/traitement',[GarconController::class,'traitement_register']);

Route::post('/garcon/login/traitement',[GarconController::class,'traitement_login']);

Route::get('/garcon/formulaire',[GarconformulaireController::class,'form_garcon'])->name('garcon/formulaire');

Route::post('/garcon/formulaire/traitement',[GarconformulaireController::class,'traitement_garcon']);


Route::get('/poinrelai/login',[PointrelaiController::class,'form_login'])->name('poinrelai/login');
Route::get('/poinrelai/register',[PointrelaiController::class,'form_register'])->name('poinrelai/register');

Route::post('/poinrelai/register/traitement',[PointrelaiController::class,'traitement_register']);

Route::post('/poinrelai/login/traitement',[PointrelaiController::class,'traitement_login']);


Route::get('/pointrelai/formulaire',[PointrelaiformulaireController::class,'form_pointrelai'])->name('pointrelai/formulaire');

Route::post('/pointrelai/formulaire/traitement',[PointrelaiformulaireController::class,'traitement_pointrelai']);

//dashbord
Route::get('/admin/dashbord',[AdminController::class,'form_admin'])->name('/admin/dashbord');

Route::get('/admin/livreur',[FormulaireController::class,'livreur_index']);
Route::get('/admin/livreur/{id}/delete',[FormulaireController::class,'destroy']);
Route::post('/admin/livreur/{id}/update',[FormulaireController::class,'update']);


Route::get('/admin/client',[CommandeController::class,'client_index']);
Route::get('/admin/client/{id}/delete',[CommandeController::class,'destroy']);
Route::post('/admin/client/{id}/update',[CommandeController::class,'update']);


Route::get('/admin/domicile',[DomicileController::class,'client_domicile']);
Route::get('/admin/domicile/{id}/delete',[DomicileController::class,'destroy']);
Route::post('/admin/domicile/{id}/update',[DomicileController::class,'update']);




Route::get('/admin/garcon',[GarconformulaireController::class,'garcon_index']);
Route::get('/admin/garcon/{id}/delete',[GarconformulaireController::class,'destroy']);
Route::post('/admin/garcon/{id}/update',[GarconformulaireController::class,'update']);

Route::get('/admin/pointrelai',[PointrelaiformulaireController::class,'pointrelai_index']);
Route::get('/admin/pointrelai/{id}/delete',[PointrelaiformulaireController::class,'destroy']);
Route::post('/admin/pointrelai/{id}/update',[PointrelaiformulaireController::class,'update']);



//permission
/*
Route::get('permissions',[PermissionController::class,'index']);
Route::get('permissions/create',[PermissionController::class,'create']);
Route::get('permissions/edit',[PermissionController::class,'edit']);
Route::post('permissions',[PermissionController::class,'store']);
*/



 Route::group(['middleware' => ['role:super-admin|admin']], function() {

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class,'destroy']);
    Route::put('/permissions/{id}/edit',[App\Http\Controllers\PermissionController::class,'update']);

    Route::resource('roles', App\Http\Controllers\RoleController::class);

    Route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class,'destroy']);

    Route::get('roles/{roleId}/give-permissions',[App\Http\Controllers\RoleController::class,'addPermissionRole']);

    Route::put('roles/{roleId}/give-permissions',[App\Http\Controllers\RoleController::class,'givePermissionRole']);

    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('users/{userId}/delete', [App\Http\Controllers\UserController::class, 'destroy']);


});
