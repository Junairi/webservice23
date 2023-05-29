<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $data = Product::all();
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
        $data = Product::where('id', $id)->first();
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

    

    // public function store(Request $request) {

    //     $validate = Validator::make($request->all(), [
    //         'soal_86' => 'required',
    //         'jenis_86' => 'required',
    //         'jawaban_86' => 'required'
    //     ]);

    //     if ($validate->fails()) {
    //         return $validate->errors();
    //     }
    //     $data = Customer::created($request->all());
    //     return response()->json([
    //         'pesan'=> "data berhasil disimpan",
    //         'data'=> $data
    //     ], 201);
    // }
}
