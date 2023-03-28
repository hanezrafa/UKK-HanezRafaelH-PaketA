<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengaduan;
use App\Models\User;



class AdminController extends Controller
{
    public function index() 
    {
        $total = Pengaduan::count();
        return view('admin.dashboard', compact('total'));
    }
}
