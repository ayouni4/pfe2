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
Use App\Http\Controllers\ColiController;
use App\Http\Controllers\Commande\CommandeeController;
use App\Http\Controllers\Commande\PoinrelaiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\OrdrelivraisonController;
use App\Models\Pointrelai;

// Définir une route pour récupérer les adresses des pointrelais
Route::get('/api/pointrelais', function() {
    $pointrelais = Pointrelai::all();

    return response()->json($pointrelais);
});


Route::get('/', function () {
    return view('welcome');
});








Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::delete('/logout',[AuthController::class, 'logout'])->name('logout');
Route::view('home','home');




Route::get('/registeer', [AuthController::class, 'showRegistrationForm'])->name('registeer');
Route::post('/registeer', [AuthController::class, 'register']);
Route::get('/admin', [AuthController::class, 'showLoginForm'])->name('admin');
Route::post('/admin', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





Route::get('/profile', [ProfileController::class, 'show'])->name('profile')->middleware('redirect.to.login');
Route::get('/profile/client',[CommandeController::class,'profile_index']);
Route::get('/profile/domicile',[DomicileController::class,'profile_domicile']);
Route::get('/profile/livreur',[FormulaireController::class,'profile_index']);
Route::get('/profile/pointrelai',[PointrelaiformulaireController::class,'profile_index']);
Route::get('/profile/garcon',[GarconformulaireController::class,'profile_index']);



Route::get('/register', [UserController::class, 'form_register'])->name('register');
Route::post('/register', [UserController::class, 'traitement_register'])->name('register.post');
Route::get('/login', [UserController::class, 'form_login'])->name('login');
Route::post('/login/traitement', [UserController::class, 'traitement_login'])->name('login.process');












/*

Route::get('/login',[ClientController::class,'form_login'])->name('login');
Route::get('/register',[ClientController::class,'form_register'])->name('register');

Route::post('/register/traitement',[ClientController::class,'traitement_register']);

Route::post('/login/traitement',[ClientController::class,'traitement_login']);

*/

Route::get('/commande/domicile', [CommandeeController::class, 'showDomicileForm'])->name('commande.domicile');
Route::post('/commande/domicile', [CommandeeController::class, 'storeDomicile'])->name('commande.store.domicile');
Route::get('/commande/colis', [CommandeeController::class, 'showColisForm'])->name('commande.colis');
Route::post('/commande/colis', [CommandeeController::class, 'storeColis'])->name('commande.store.colis');


Route::get('/commande/pointrelais', [PoinrelaiController::class, 'showPointRelaisForm'])->name('commande.pointrelais');
Route::post('/commande/pointrelais', [PoinrelaiController::class, 'storePointRelais'])->name('commande.store.pointrelais');
Route::get('/commande/coli', [PoinrelaiController::class, 'showColisForm'])->name('commande.colis');
Route::post('/commande/coli', [PoinrelaiController::class, 'storeColis'])->name('commande.store.colis');




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

Route::get('/admin/dashboard', [AdminController::class, 'form_admin'])
    ->name('admin.dashboard')
    ->middleware('redirect.to.admin.login');
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





Route::get('/colis',[ColiController::class,'showCreateForm'])->name('colis');

Route::post('/colis/traitement',[ColiController::class,'store']);








Route::get('/ordrelivraison', [OrdrelivraisonController::class, 'showColisData'])->name('ordrelivraison');
