<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardAnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcement = Announcement::latest()->paginate(12);

        return view('dashboard.announcements.index', [
            'title' => 'PENGUMUMAN',
            'announcements' => $announcement,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.announcements.create', [
            'title' => 'TAMBAH PENGUMUMAN',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'slug' => 'required|unique:announcements',
            'description' => 'required|max:255',
            'body' => 'required',
        ]);

        if($request->slug == null){
            return redirect()->back()->withErrors(['slug' => 'Slug tidak boleh kosong, ketik ulang judul untuk mengisi slug']);
        }

        Announcement::create($validatedData);

        return redirect('/dashboard/announcements')->with('success', 'New Announcement has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        return view('dashboard.announcements.show', [
            'title' => 'PENGUMUMAN',
            'announcement' => $announcement
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        {
            Announcement:: destroy($announcement->id);
            return redirect ('/dashboard/announcements')->with('success', 'Announcement has been deleted!');
        }
    }
}
