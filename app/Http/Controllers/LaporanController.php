<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index ()
    {
        return view('admn.laporan');
    }

    public function generatePDF(Request $request)
    {
        $request->validate([
            'start' => 'required',
            'end' => 'required',
        ]);

        $pengaduan = Pengaduan::where('tgl_pengaduan', '>=', $request->start)->where('tgl_pengaduan', '<=', $request->end)->latest()->get();

        $data = [
            'pengaduan' => $pengaduan
        ];

        $pdf = PDF::loadView('admin.laporan', $data);

        return $pdf->download('laporan.pdf');
    }
}