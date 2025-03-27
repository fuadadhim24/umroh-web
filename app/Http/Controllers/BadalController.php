<?php

namespace App\Http\Controllers;

use App\Models\Badal;
use Illuminate\Http\Request;

class BadalController extends Controller
{
    public function index()
    {
        $badal = Badal::all();
        // dd($badal);
        return view('main.badal', compact('badal'));
    }

    public function show($id)
    {
        $badal = Badal::find($id);

        if (!$badal) {
            return redirect()->route('dashboard')->with('error', 'Paket Badal tidak ditemukan.');
        }
        // dd($badal);
        if (is_string($badal->facilities)) {
            $badal->facilities = json_decode($badal->facilities, true);
        }

        return view('main.detail-badal', compact('badal'));
    }
}
