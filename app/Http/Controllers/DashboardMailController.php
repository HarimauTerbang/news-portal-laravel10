<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class DashboardMailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mail = Mail::latest()->paginate(1);
        return view('dashboard.mails.index', [
            'title' => 'PESAN',
            'mails' => $mail,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mail $mail)
    {
        Mail:: destroy($mail->id);
        return redirect ('/dashboard/mails')->with('success', 'Mail has been deleted!');
    }
}
