<?php

namespace App\Http\Controllers;

use App\Models\Haji;
use Illuminate\Http\Request;

class HajiController extends Controller
{
    public function index()
    {
        $haji = Haji::first();
        if ($haji) {
            $haji->harga_paket = number_format($haji->harga_paket, 0, ',', '.');
        }
        // dd($haji);
        return view('main.haji', compact('haji'));
    }
    public function show($id)
    {
        $haji = Haji::find($id);

        if (!$haji) {
            return redirect()->route('dashboard')->with('error', 'Paket Haji tidak ditemukan.');
        }
        // dd($haji);
        if (is_string($haji->keunggulan)) {
            $haji->keunggulan = json_decode($haji->keunggulan, true);
        }
        if (is_string($haji->facilities)) {
            $haji->facilities = json_decode($haji->facilities, true);
        }
        if (is_string($haji->tidak_termasuk)) {
            $haji->tidak_termasuk = json_decode($haji->tidak_termasuk, true);
        }
        if (is_string($haji->akomodasi)) {
            $haji->akomodasi = json_decode($haji->akomodasi, true);
        }
        if (is_string($haji->gratis)) {
            $haji->gratis = json_decode($haji->gratis, true);
        }

        return view('main.detail-haji', compact('haji'));
    }
}
