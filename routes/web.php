<?php
// KONKSI MODEL DENGAN ROUTE
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardAnnouncementController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DashboardMailController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('beranda',[
        'title' => 'BERANDA',

        'banner001'=>'https://i.ytimg.com/vi/WdkoERcUNEY/maxresdefault.jpg',
        'banner002'=>'https://i.ytimg.com/vi/pWr-0L1BNq8/maxresdefault.jpg',
        'banner003'=>'https://i.ytimg.com/vi/WdkoERcUNEY/maxresdefault.jpg',

    ]);
});

// Postingan Pengumuman
Route::get('/pengumuman',[AnnouncementController::class,'index']);

// Single Post Pengumuman
Route::get('announcements/{announcement:slug}', [AnnouncementController::class,'show']);

// POSTINGAN BERITA
Route::get('/berita', [PostController::class,'index']);

// Single Post Berita
Route::get('posts/{post:slug}', [PostController::class,'show']);

// KOTAK
Route::get('/kontak', [MailController::class,'index']);
Route::post('/kontak', [MailController::class, 'store'])->name('mails.store');

// DASHBOARD ADMIN
Route::prefix('/dashboard')-> middleware('auth')-> group(function () {
    Route::get('/', [DashboardController::class,'index']);

    Route::resource('/posts', DashboardPostController::class,);
    Route::post('/posts', [DashboardPostController::class, 'store'])->name('dashboard.posts.store');

    Route::resource('/announcements', DashboardAnnouncementController::class,);
    Route::post('/announcements', [DashboardAnnouncementController::class, 'store'])->name('dashboard.announcements.store');

    Route::resource('/mails', DashboardMailController::class);
    route::get('/mails', [DashboardMailController::class, 'index'])->name('dashboard.mails.index');
    route::post('/mails', [DashboardMailController::class, 'destroy'])->name('dashboard.mails.destroy');
});

// LOGIN ADMIN
Route::prefix('login')->middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login.index');
    Route::post('/', [LoginController::class, 'authenticate'])->name('login.authenticate');
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

