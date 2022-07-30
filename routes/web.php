<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\CkeditorController;
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

// Ck editor routes
Route::get('ckeditor', 'CkeditorController@index');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/blog-details/{slug}', [PagesController::class, 'blog_details'])->name('blog.details');
Route::get('/privacy-policy', [PagesController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/refund-policy', [PagesController::class, 'refund_policy'])->name('refund-policy');
Route::get('/terms', [PagesController::class, 'terms'])->name('terms');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/pricing', [PagesController::class, 'pricing'])->name('pricing');
Route::get('/search', [PagesController::class, 'search'])->name('search');
Route::get('/mytestmail', [PagesController::class, 'mytestmail'])->name('mytestmail');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth'], ['role:admin']], function () {
    // User management resources
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    // User management resources
    Route::resource('roles', RoleController::class);
    // Route::get('role/permission/create', 'RoleController@permissionCreate')->name('role.permission.create');
    // Route::post('role/permission/store', 'RoleController@permissionStore')->name('role.permission.store');

    Route::resource('users', UserController::class);
    Route::get('users/change/status', [UserController::class, 'changeStatus']);
    Route::get('block/user/list', [LoginController::class, 'blockedUserList'])->name('blockedUserList');
    Route::any('unblock/user', [LoginController::class, 'unblockUser'])->name('unblock.user');
    Route::get('user/logs',  [UserController::class, 'userLogs'])->name('user.logs');
    Route::get('user/log/show', [UserController::class, 'userLogShow'])->name('user.log.show');
    Route::get('user/log/delete', [UserController::class, 'userLogDestroy'])->name('user.log.destroy');
    Route::resource('post_category', PostCategoryController::class);
    Route::resource('post', PostController::class);
});
Route::resource('post_comment', PostCommentController::class);
