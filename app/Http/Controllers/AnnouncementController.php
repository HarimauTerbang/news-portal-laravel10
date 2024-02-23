<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::latest();

        if(request('search')){
            //cari berdasarkan judul
            $announcements->where('title', 'like', '%' . request('search') . '%')
            //cari berdasarkan isi body
            ->orWhere('body', 'like', '%' . request('search') . '%');
        }
        
        // dd(request('search'));
        return view('announcements', [
            'title' => 'PENGUMUMAN',
            'announcements' => $announcements->paginate(2),
        ]);
    }

    public function show(Announcement $announcement)
    {
        return view('announcement',[
            'title' => 'PENGUMUMAN',
            'announcement' => $announcement,
        ]);
    }
}