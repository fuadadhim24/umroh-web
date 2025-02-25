<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Pendaftaran;
use Carbon\Carbon;

class RegisterFormController extends Controller
{
    public function index()
    {
        $paket = Paket::all();
        return view('form.register-form', compact('paket'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'phone_number' => 'required|string',
            'date_of_birth' => 'required|date',
            'national_id_number' => 'required|string',
            'family_id_number' => 'required|string',
            'gender' => 'required|string',
            'marital_status' => 'required|string',
            'occupation' => 'required|string',
            'father_name' => 'required|string',
            'address' => 'required|string',
            'province' => 'required|string',
            'city_regency' => 'required|string',
            'district' => 'required|string',
            'sub_district_village' => 'required|string',
            'email' => 'required|email',
            'passport_status' => 'required|boolean',
            'meningitis_vaccine_status' => 'required|boolean',
            'nama_sesuai_paspor' => 'nullable|string',
            'nomor_paspor' => 'nullable|string',
            'tanggal_issued_paspor' => 'nullable|date',
            'tanggal_expired' => 'nullable|date',
            'permintaan' => 'required|string',
            'notes' => 'nullable|string',
            'source_of_information' => 'required|string',
            'agent_number' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'id_paket' => 'required|exists:pakets,id',
        ]);

        $memberId = $this->generateMemberId($request->input('agent_number'));

        $pendaftaran = new Pendaftaran($request->all());
        $pendaftaran->member_id = $memberId;

        // Store the image path if the image is uploaded
        if ($request->hasFile('image')) {
            $pendaftaran->image = $request->file('image')->store('images/artikel', 'public');
        }

        $pendaftaran->save();

        return redirect()->route('register-form')->with('message', 'Pendaftaran berhasil dilakukan!');
    }
    
    private function generateMemberId(?string $agent_number = null): string
    {
        $currentYear = Carbon::now()->format('y');
        $currentMonth = Carbon::now()->format('m');

        $lastMemberId = Pendaftaran::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->orderBy('member_id', 'desc')
            ->value('member_id');

        $lastNumber = $lastMemberId ? (int) substr($lastMemberId, -3) : 0;

        $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);

        if (empty($agent_number)) {
            return "A01-{$currentYear}{$currentMonth}{$newNumber}";
        } else {
            return "{$agent_number}-{$currentYear}{$currentMonth}{$newNumber}";
        }
    }
}
