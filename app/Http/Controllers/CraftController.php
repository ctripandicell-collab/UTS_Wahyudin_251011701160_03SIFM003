<?php

namespace App\Http\Controllers;

use App\Models\Craft;
use Illuminate\Http\Request;

class CraftController extends Controller
{
    public function index()
    {
        $featuredCrafts = Craft::take(3)->get();
        return view('home', compact('featuredCrafts'));
    }

    public function catalog()
    {
        $crafts = Craft::all();
        return view('katalog', compact('crafts'));
    }

    public function show($id)
    {
        $craft = Craft::findOrFail($id);
        return view('detail', compact('craft'));
    }

    public function contact()
    {
        return view('kontak');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        return redirect()->route('kontak')->with('success', 'Pesan Anda berhasil dikirim!');
    }

    public function about()
    {
        return view('about');
    }
}