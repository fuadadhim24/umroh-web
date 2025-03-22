<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $umroh = Paket::latest()->get();
        foreach ($umroh as $umroh_item) {
            $umroh_item->price = number_format($umroh_item->price, 0, ',', '.');
        }
        return view('main.umroh', compact('umroh'));
    }

    public function indexDaftar(){
        $umroh = Paket::latest()->get();
        foreach ($umroh as $umroh_item) {
            $umroh_item->price = number_format($umroh_item->price, 0, ',', '.');
        }
        
        return view('main.daftar-umroh', compact('umroh'));
    }
    public function show($id)
    {
        $umroh = Paket::find($id);

        if (!$umroh) {
            return redirect()->route('dashboard')->with('error', 'Paket Haji tidak ditemukan.');
        }
        // dd($umroh);
        if (is_string($umroh->advantages)) {
            $umroh->advantages = json_decode($umroh->advantages, true);
        }
        if (is_string($umroh->facilities)) {
            $umroh->facilities = json_decode($umroh->facilities, true);
        }
        if (is_string($umroh->exclusions)) {
            $umroh->exclusions = json_decode($umroh->exclusions, true);
        }
        if (is_string($umroh->additional_services)) {
            $umroh->additional_services = json_decode($umroh->additional_services, true);
        }
        if (is_string($umroh->bonuses)) {
            $umroh->bonuses = json_decode($umroh->bonuses, true);
        }

        return view('main.detail-umroh', compact('umroh'));
    }
}
