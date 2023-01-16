<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\StoreController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\GeneralSettingsController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\MediaUploadController;
use App\Http\Controllers\Admin\PermissionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Route::get('login/{provider}', [AuthController::class,'redirect']);
Route::get('login/{provider}/callback',[AuthController::class,'callback']);
Route::get('logout',[AuthController::class,'logout']);*/
Auth::routes();


Route::resources([
    'stores'=>StoreController::class,
]);

Route::get('/clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    dd("cache cleared");
});

Auth::routes();

Route::group([
    'middleware'    => ['auth'],
    'prefix'        => 'admin',
], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    //Users Controller
    Route::resource('users', UsersController::class);
    Route::post('get-users',  [UsersController::class, 'getUsers'])->name('admin.getUsers');
    Route::post('get-user', [UsersController::class, 'userDetail'])->name('admin.getUser');
    Route::get('users/delete/{id}',  [UsersController::class, 'destroy'])->name('user-delete');
    Route::post('delete-selected-users',  [UsersController::class, 'DeleteSelectedUsers'])->name('delete-selected-users');
    Route::get('edit-profile/{id}',  [UsersController::class, 'show'])->name('edit-profile');
    Route::get('/profile-setting', [UsersController::class, 'profileSetting'])->name('user.profile');
    Route::post('/profile-setting', [UsersController::class, 'updateProfile'])->name('user.profile');

    //Roles Controller
    Route::resource('roles', RoleController::class);
    Route::post('get-roles',  [RoleController::class, 'getRoles'])->name('admin.getRoles');
    Route::post('get-role', [RoleController::class, 'roleDetail'])->name('admin.getRole');
    Route::get('roles/delete/{id}',  [RoleController::class, 'destroy'])->name('role-delete');
    Route::post('delete-selected-roles',  [RoleController::class, 'DeleteSelectedRoles'])->name('delete-selected-roles');

    //Permission Controller
    Route::resource('permissions', PermissionController::class);
    Route::post('get-permissions',  [PermissionController::class, 'getPermissions'])->name('admin.getPermissions');
    Route::post('get-permission', [PermissionController::class, 'permissionDetail'])->name('admin.getPermission');
    Route::get('permissions/delete/{id}',  [PermissionController::class, 'destroy'])->name('permission-delete');
    Route::post('delete-selected-permissions',  [PermissionController::class, 'DeleteSelectedPermissions'])->name('delete-selected-permissions');

    //Logs Controller
    Route::resource('logs', LogController::class);
    Route::post('get-log', [LogController::class, 'logDetail'])->name('admin.getLog');
    Route::get('log/delete/{id}',  [LogController::class, 'destroy'])->name('log-delete');
    Route::post('delete-selected-logs',  [LogController::class, 'DeleteSelectedLogs'])->name('delete-selected-logs');

    //general settings
    Route::get('/general-settings/site-identity', [GeneralSettingsController::class, 'site_identity'])->name('admin.general.site.identity');
    Route::post('/general-settings/site-identity', [GeneralSettingsController::class, 'update_site_identity']);

    Route::get('/general-settings/basic-settings', [GeneralSettingsController::class, 'basic_settings'])->name('admin.general.basic.settings');
    Route::post('/general-settings/basic-settings', [GeneralSettingsController::class, 'update_basic_settings']);
    //smtp settings
    Route::get('/general-settings/smtp-settings', [GeneralSettingsController::class, 'smtp_settings'])->name('admin.general.smtp.settings');
    Route::post('/general-settings/smtp-settings', [GeneralSettingsController::class, 'update_smtp_settings']);

    /* media upload routes */
    Route::post('/media-upload/all', [MediaUploadController::class, 'all_upload_media_file'])->name('admin.upload.media.file.all');
    Route::post('/media-upload', [MediaUploadController::class, 'upload_media_file'])->name('admin.upload.media.file');
    Route::post('/media-upload/delete', [MediaUploadController::class, 'delete_upload_media_file'])->name('admin.upload.media.file.delete');
});


Route::get('browse-all',[FrontController::class,'browse_all']);
Route::get('/single-business/{id}',[FrontController::class,'single_business'])->name('single_business');

Route::get('/', function () {
    return view('FrontEnd.index');
});
//industory url
Route::get('/industry',function(){
    return view('FrontEnd.individual-category');
});

// Browse-all url
// single Bussiness url
Route::get('/single-business', function(){
    return view('FrontEnd.single-business');
});
// create store URL
Route::get('/sell-your-business', function(){
    return view('FrontEnd.createStore');
});
Route::get('/dashboard', function(){
    return view('FrontEnd.storeListing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
