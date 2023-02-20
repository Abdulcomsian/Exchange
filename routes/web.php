<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\PaypalController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\GeneralSettingsController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\MediaUploadController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ManageStoreController;
use App\Http\Controllers\Auth\SocialController;
use App\Models\Store;


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
Route::get('auth/google', [SocialController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [SocialController::class, 'handleGoogleCallback'])->name('auth.google_callback');

Route::get('auth/facebook', [SocialController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('auth/facebook/callback', [SocialController::class, 'handleFacebookCallback'])->name('auth.facebook_callback');

Route::get('/shopify/install', [SocialController::class, 'install'])->name('shopify.install');
Route::get('/shopify/callback', [SocialController::class, 'callback'])->name('shopify.callback');


Route::get('logout',[SocialController::class,'logout'])->name('logout');

Route::get('/',[FrontController::class,'home'])->name('home');

Route::get('/test',[FrontController::class,'test'])->name('test');


Route::get('/apply-filter',[FrontController::class,'applyFilter'])->name('apply_filter');

Route::get('/all-business',[FrontController::class,'allBusiness'])->name('all_business');

Route::get('payment',[FrontController::class,'paymentIntent'])->name('payment_intent');
Route::post('checkout', [FrontController::class, 'checkout'])->name('checkout');

Route::get('/pay-with-paypal', [PaypalController::class,'payWithPaypal'])->name('pay-with-paypal');
Route::get('/payment/success', [PaypalController::class,'paymentSuccess'])->name('payment-success');
Route::get('/payment/cancel', [PaypalController::class,'paymentCancel'])->name('payment-cancel');

/*Route::get('/all-business', function () {
    $stores = Store::get();
    return view('FrontEnd.all-business',['stores'=>$stores]);
});*/


/*Route::get('login/{provider}', [AuthController::class,'redirect']);
Route::get('login/{provider}/callback',[AuthController::class,'callback']);*/
Auth::routes();




Route::get('/clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    dd("cache cleared");
});

Auth::routes();

Route::group([
    'middleware'    => 'role:user',
    'prefix'        => 'user',
], function () {

    Route::resource('stores', StoreController::class);
    Route::post('stores/step-one',  [StoreController::class, 'stepOne'])->name('stores.step_one');
    Route::post('stores/step-two',  [StoreController::class, 'stepTwo'])->name('stores.step_two');
    Route::post('stores/step-three',  [StoreController::class, 'stepThree'])->name('stores.step_three');
    Route::post('stores/step-four',  [StoreController::class, 'stepFour'])->name('stores.step_four');
    Route::post('stores/step-five',  [StoreController::class, 'stepFive'])->name('stores.step_five');
    Route::post('stores/step-six',  [StoreController::class, 'stepSix'])->name('stores.step_six');
    Route::post('stores/step-seven',  [StoreController::class, 'stepSeven'])->name('stores.step_seven');

    Route::get('dashboard',[FrontController::class,'dashboard'])->name('dashboard');

    Route::get('/sell-your-business',[FrontController::class,'sell_your_business'])->name('sell_your_business');
    Route::get('/sell-your-business/{id}',[FrontController::class,'edit_sell_your_business'])->name('sell_your_business.edit');
    Route::get('/tags', [FrontController::class, 'tags'])->name('tags');
    Route::get('payment-page/{id}', [FrontController::class, 'paymentPage'])->name('payment_page');
    Route::get('stripe-payment', [FrontController::class, 'stripePayment'])->name('stripe_payment');

});

Route::group([
    'middleware'    => 'role:admin',
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
    Route::resource('manage-stores', ManageStoreController::class);
    Route::post('get-manage-store', [ManageStoreController::class, 'manageStoreDetail'])->name('admin.getStore');
    Route::get('manage-stores/delete/{id}',  [ManageStoreController::class, 'destroy'])->name('store-delete');
    Route::post('delete-selected-manage-stores',  [ManageStoreController::class, 'DeleteSelectedManageStores'])->name('delete-selected-stores');
    Route::get('/change-status/{id}/{status}',[ManageStoreController::class,'change_status'])->name('change_status');
    Route::get('/change-revenue-status/{id}/{status}',[ManageStoreController::class,'change_revenue_status'])->name('change_revenue_status');
    Route::get('/change-session-status/{id}/{status}',[ManageStoreController::class,'change_session_status'])->name('change_session_status');

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

/*Route::get('/', function () {
    return view('FrontEnd.index');
})->name('home');*/
//industory url
/*Route::get('/industry',function(){
    return view('FrontEnd.individual-category');
});*/

// Browse-all url
// single Bussiness url
Route::get('/single-business', function(){
    return view('FrontEnd.single-business');
});
// create store URL
/*Route::get('/sell-your-business', function(){
    return view('FrontEnd.createStore');
});*/


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('category/{slug}', [FrontController::class, 'categories'])->name('categories');
Route::get('/store/{slug}', [FrontController::class, 'singleStore'])->name('single_store');
