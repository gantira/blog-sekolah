<?php

namespace App\Http\Controllers\Admin;

use App\Exports\RegistrationExport;
use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::when(request('search'), function ($query) {
            $query->where('nama_lengkap', 'like', '%' . request('search') . '%');
        })
            ->latest()->paginate(10);

        return view('admin.registrations.index', [
            'registrations' => $registrations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.registrations.create', [
            'registration' => new Registration(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registration = $request->validate([
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'jenis_kelamin' => 'required',
            'ttl' => 'required',
            'kewarganegaraan' => 'required',
            'gelombang' => 'required',
            'abk' => 'required',
            'alamat' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'daerah' => 'nullable',
            'no_hp_ayah' => 'nullable',
            'no_hp_ibu' => 'nullable',
            'tlp' => 'nullable',
            'email' => 'nullable',
            'info_dari' => 'required',
        ]);

        Registration::create($registration);

        return redirect()->route('bagas.registrations.index')->with('message', 'New Registration has been submit!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        return view('admin.registrations.edit', [
            'registration' => $registration,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        $registration = $request->validate([
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'jenis_kelamin' => 'required',
            'ttl' => 'required',
            'kewarganegaraan' => 'required',
            'gelombang' => 'required',
            'abk' => 'required',
            'alamat' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'daerah' => 'nullable',
            'no_hp_ayah' => 'nullable',
            'no_hp_ibu' => 'nullable',
            'tlp' => 'nullable',
            'email' => 'nullable',
            'info_dari' => 'required',
        ]);

        $registration->update($registration);


        return redirect()->route('bagas.registrations.index')->with('message', 'New Registration has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        $registration->delete();

        return redirect()->route('bagas.registrations.index')->with('message', 'Registration deleted successfully!');
    }

    public function export()
    {
        return view('admin.registrations.export');
    }

    public function exportExcel()
    {
        return Excel::download(new RegistrationExport, 'registrations.xlsx');
    }
}
