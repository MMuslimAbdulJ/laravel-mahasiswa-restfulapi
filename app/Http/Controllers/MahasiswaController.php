<?php

namespace App\Http\Controllers;

use App\Helpers\APIFormatter;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mahasiswa::all();
        if ($data) {
            return APIFormatter::success(200, 'OK', $data);
        } else {
            return APIFormatter::failed(404, 'Not found');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nim' => 'required|min:9|max:9',
                'nama' => 'required',
                'fakultas' => 'required',
                'prodi' => 'required'
            ]);
            $isExists = Mahasiswa::where('nim', $request->nim)->first();
            if ($isExists) {
                return APIFormatter::failed(422, 'Data already exists');
            }
            $mahasiswa = Mahasiswa::create([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'fakultas' => $request->fakultas,
                'prodi' => $request->prodi,
            ]);
            $saveSuccess = Mahasiswa::where('nim', $mahasiswa->nim)->first();
            return APIFormatter::success(201, 'Created', $saveSuccess);
        } catch (\Exception $exception) {
            return APIFormatter::failed(422, 'Failed to create data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $nim)
    {
        try {
            $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
            return APIFormatter::success(200, 'OK', $mahasiswa);
        } catch (\Exception $exception) {
            return APIFormatter::failed(404, 'Not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nim)
    {
        try {
            $validatedMahasiswa = $request->validate([
                'nama' => 'required',
                'fakultas' => 'required',
                'prodi' => 'required'
            ]);
            $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
            $mahasiswa->update($validatedMahasiswa);
            return APIFormatter::success(200, 'Updated Successfully', $mahasiswa);
        } catch (\Exception $exception) {
            return APIFormatter::failed(406, "Not acceptable");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nim)
    {
        try {
            $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
            $mahasiswa->delete();
            return APIFormatter::success(200, 'Deleted', "Mahasiswa with NIM $nim has been deleted");
        } catch (\Exception $exception) {
            return APIFormatter::failed(404, 'Resource does not exists');
        }
    }
}
