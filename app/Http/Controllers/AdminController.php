<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->search;

        $workshops = Workshop::when($keyword, function ($query) use ($keyword) {

            $query->where('judul', 'like', "%{$keyword}%")
                ->orWhere('pembicara', 'like', "%{$keyword}%")
                ->orWhere('lokasi', 'like', "%{$keyword}%")
                ->orWhere('penyelenggara', 'like', "%{$keyword}%");

        })
        ->latest()
        ->paginate(5);

        return view('admin.dashboard', compact('workshops'));
    }

    public function workshop()
    {
        $query = Workshop::query();

        if (request('search')) {

            $query->where('judul', 'like', '%' . request('search') . '%');

        }

        $workshops = $query->latest()->paginate(5);

        return view('admin.workshop', compact('workshops'));
    }
}