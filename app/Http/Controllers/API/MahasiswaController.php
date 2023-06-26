<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MahasiswaController extends Controller
{
    public function index() {
        $data = Mahasiswa::all();
        return response()->json($data, 200);
    }

    // public function show($id) {
    //     $data = Customer::where('id', $id)->first();
    //     return response()->json($data, 200);
    // }

    //show cara 1
    // public function show(Customer $id) {
    //     return response()->json($id, 200);
    // }

    public function show ($id) {
        $data = Mahasiswa::where('id', $id)->first();
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data Tidak Ditemukan',
                'data' => null
            ], 404);
        }

        return response()->json([
            'pesan' => 'Data Ditemukan',
            'data' => $data
        ], 200);
    }

    

    public function store(Request $request) {

        $validate = Validator::make($request->all(), [
            'nim' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        if ($validate->fails()) {
            return $validate->errors();
        }

        $data = Mahasiswa::create($request->all());
        return response()->json([
            'pesan'=> "data berhasil disimpan",
            'data'=> $data
        ], 201);

    }

    public function update(Request $request, $id) {
        $data = Mahasiswa::where('id', $id)->first();

        // cek data dengan id yg dikirimkan
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data tidak ditemukan',
                'data' => $data
            ], 404);
        }

        // proses validasi
        $validate = Validator::make($request->all(), [
            'nim' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        if ($validate->fails()) {
            return $validate->errors();
        }

        // proses simpan perubahan data
        $data->update($request->all());

        return response()->json([
            'pesan' => 'Data berhasil di update',
            'data' => $data
        ], 201);
    }

    public function delete($id) {
        $data = Mahasiswa::where('id', $id)->first();
        // cek data dengan id yg dikirimkan
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data tidak ditemukan',
                'data' => $data
            ], 404);
        }

        $data->delete();

        return response()->json([
            'pesan' => 'Data berhasil di hapus',
            'data' => $data
        ], 200);
    }
}
