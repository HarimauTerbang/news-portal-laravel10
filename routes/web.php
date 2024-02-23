<?php
// KONEKSI MODEL DENGAN ROUTE
use App\Models\Announcement;
use App\Http\Controllers\AnnouncementController;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardAnnouncementController;

use Illuminate\Support\Facades\Route;


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
Route::post('/', [MessageController::class, 'store'])->name('messages.store');

// DASHBOARD ADMIN
Route::get('/dashboard', function () {
    return view('dashboard.index',[
        'title' => 'ADMIN'
    ]);
});


Route::resource('/dashboard/posts', DashboardPostController::class,);
Route::post('/dashboard/posts', [DashboardPostController::class, 'store'])->name('dashboard.posts.store');

Route::resource('/dashboard/announcements', DashboardAnnouncementController::class,);
Route::post('/dashboard/announcements', [DashboardAnnouncementController::class, 'store'])->name('dashboard.announcements.store');

// Route::resource('/dashboard/massages', DashboardMassageController::class,);