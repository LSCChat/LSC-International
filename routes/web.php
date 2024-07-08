<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Job_recruitmentController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobroleController;
use App\Http\Controllers\MasterController;

Route::get('/', function () {
    return view('user_register');
});
Route::get('company_register', function () {
    return view('company_register');
});

Route::post('store',[AuthController::class,'store'])->name('store');
Route::post('userRegister',[AuthController::class,'userRegister'])->name('register.store');
Route::get('',[AuthController::class,'register']);
Route::get('login',[AuthController::class,'login'])->name('login');




Route::resource('job_recruitment', Job_recruitmentController::class);
Route::resource('agency', AgencyController::class);
Route::resource('country', CountryController::class);
Route::resource('jobrole', JobroleController::class);
Route::resource('company', CompanyController::class);


// Route::get('/job_recruitment', [Job_recruitmentController::class, 'index'])->name('job_recruitment.index');
// Route::get('/job_recruitment/create', [Job_recruitmentController::class, 'create'])->name('job_recruitment.create');
// Route::post('/job_recruitment/store', [Job_recruitmentController::class, 'store'])->name('job_recruitment.store');
// Route::get('/job_recruitment/{id}', [Job_recruitmentController::class, 'show'])->name('job_recruitment.show');
// Route::get('/job_recruitment/{id}/edit', [Job_recruitmentController::class, 'edit'])->name('job_recruitment.edit');
// Route::put('/job_recruitment/{id}', [Job_recruitmentController::class, 'update'])->name('job_recruitment.update');
// Route::delete('/job_recruitment/{id}', [Job_recruitmentController::class, 'destroy'])->name('job_recruitment.destroy');

Route::get('/master',[MasterController::class, 'index'])->name('master.index');
Route::post('/master/jobRole', [MasterController::class, 'jobRoleStore'])->name('master.jobRole.store');
Route::delete('/master/jobRole/{jobRole}',[MasterController::class, 'jobRoleDestroy'])->name('master.jobRole.destroy');


Route::get('/master/agency',[MasterController::class, 'agencyIndex'])->name('master.agency.index');
Route::post('/master/agency',[MasterController::class, 'agencyStore'])->name('master.agency.store');
Route::delete('/master/agency/{agency}',[MasterController::class, 'agencyDestroy'])->name('master.agency.destroy');


Route::get('/master/country',[MasterController::class, 'countryIndex'])->name('master.country.index');
Route::post('/master/country',[MasterController::class, 'countryStore'])->name('master.country.store');
Route::delete('/master/country/{country}',[MasterController::class, 'countryDestroy'])->name('master.country.destroy');

Route::get('/master/role',[MasterController::class, 'roleIndex'])->name('master.role.index');
Route::post('/master/role',[MasterController::class, 'roleStore'])->name('master.role.store');
Route::delete('/master/role/{role}',[MasterController::class, 'roleDestroy'])->name('master.role.destroy');

Route::get('/master/userdetail',[MasterController::class, 'UserdetailIndex'])->name('master.userdetail.index');
Route::post('/master/userdetail',[MasterController::class, 'UserdetailStore'])->name('master.userdetail.store');
Route::delete('/master/userdetail/{userdetail}',[MasterController::class, 'UserdetailDestroy'])->name('master.userdetail.destroy');