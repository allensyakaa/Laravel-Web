<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MataKuliahController extends Controller
{

public function index()
{
    return 'Menampilkan data matakuliah';
}

public function create()
{
    return 'Menampilkan form tambah matakuliah';
}

public function store(Request $request)
{
    return 'Menyimpan data matakuliah baru';
}

public function show(string $kode = '')
{
    if ($kode == '') {
        return 'Masukkan kode matakuliah!';
    }
    return 'Anda mengakses matakuliah ' . $kode;
}

public function edit(string $kode)
{
    return 'Menampilkan form edit matakuliah ' . $kode;
}

public function update(Request $request, string $kode)
{   
    return 'Memperbarui data matakuliah ' . $kode;
}

public function destroy(string $kode)
{
    return 'Menghapus data matakuliah ' . $kode;
}

    //
}
