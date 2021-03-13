<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
    	$pengumuman = Pengumuman::with(['user'])->latest()->paginate(4);
    	return view('pengumuman.index',compact('pengumuman'));
    }

    public function show(Pengumuman $pengumuman)
    {
    	return view('pengumuman.show',compact('pengumuman'));
    }
}
