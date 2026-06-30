<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class WorkshopController extends Controller
{
    public function index()
    {
        $workshops = Workshop::latest()->get();

        return view('home.index', compact('workshops'));
    }

    public function workshop()
    {
        $workshops = Workshop::latest()->paginate(6);

        return view('workshop.index', compact('workshops'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pembicara' => 'required',
            'lokasi' => 'required',
            'penyelenggara' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'gambar' => 'required|image'
        ]);

        $gambar = time().'.'.$request->gambar->extension();

        $request->gambar->move(public_path('images/workshop'), $gambar);

        Workshop::create([
            'judul' => $request->judul,
            'pembicara' => $request->pembicara,
            'lokasi' => $request->lokasi,
            'penyelenggara' => $request->penyelenggara,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'gambar' => $gambar,
        ]);

        return redirect('/admin')
        ->with('success', 'Workshop berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $workshop = Workshop::findOrFail($id);

        return view('admin.edit', compact('workshop'));
    }

    public function update(Request $request, $id)
    {
        $workshop = Workshop::findOrFail($id);

        $workshop->update([
            'judul' => $request->judul,
            'pembicara' => $request->pembicara,
            'lokasi' => $request->lokasi,
            'penyelenggara' => $request->penyelenggara,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('/admin')
            ->with('success', 'Workshop berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $workshop = Workshop::findOrFail($id);

        // Hapus gambar jika ada
        if (file_exists(public_path('images/workshop/' . $workshop->gambar))) {
            unlink(public_path('images/workshop/' . $workshop->gambar));
        }

        $workshop->delete();

        return redirect('/admin')
            ->with('success', 'Workshop berhasil dihapus.');
    }

    public function show($id)
    {
        $workshop = Workshop::findOrFail($id);

        return view('workshop.detail', compact('workshop'));
    }

    public function exportPdf()
    {
        $workshops = Workshop::latest()->get();

        $pdf = Pdf::loadView('admin.pdf', compact('workshops'));

        return $pdf->download('laporan-workshop.pdf');
    }
}