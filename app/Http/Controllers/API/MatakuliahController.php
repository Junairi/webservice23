<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MatakuliahController extends Controller
{
    public function index() {
        $data = Matakuliah::with('jurusan')->get();
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
        $data = Matakuliah::where('id', $id)->first();
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
            'nama' => 'required',
            'semester' => 'required',
            'sks_teori' => 'required',
            'sks_praktikum' => 'required',
            'jurusan_id' => 'required'
        ]);

        if ($validate->fails()) {
            return $validate->errors();
        }

        $data = Matakuliah::create($request->all());
        return response()->json([
            'pesan'=> "data berhasil disimpan",
            'data'=> $data
        ], 201);

    }

    public function update(Request $request, $id) {
        $data = Matakuliah::where('id', $id)->first();

        // cek data dengan id yg dikirimkan
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data tidak ditemukan',
                'data' => $data
            ], 404);
        }

        // proses validasi
        $validate = Validator::make($request->all(), [
            'nama' => 'required',
            'semester' => 'required',
            'sks_teori' => 'required',
            'sks_praktikum' => 'required',
            'jurusan_id' => 'required'
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
        $data = Matakuliah::where('id', $id)->first();
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
