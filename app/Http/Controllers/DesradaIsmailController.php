<?php

namespace App\Http\Controllers;

use App\Models\Desrada_ismail;
use Illuminate\Http\Request;

class DesradaIsmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataArray = Desrada_ismail::latest()->paginate(10);
        return view("main", compact("dataArray"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nim" => ["required"],
            "nama" => ["required"],
            "kelas" => ["required"],
            "jenis_kelamin" => ["required"],
        ]);

        Desrada_ismail::create([
            "nim" => $request->input("nim"),
            "nama" => $request->input("nama"),
            "kelas" => $request->input("kelas"),
            "jenis_kelamin" => $request->input("jenis_kelamin"),
        ]);

        return redirect()->route('crud.index')->with(['succes' => 'Data berhasil disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Desrada_ismail::findorFail($id);
        return view("show", compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Desrada_ismail::findorFail($id);
        return view("edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "nim" => ["required"],
            "nama" => ["required"],
            "kelas" => ["required"],
            "jenis_kelamin" => ["required"],
        ]);

        Desrada_ismail::findorFail($id)->update([
            "nim" => $request->input("nim"),
            "nama" => $request->input("nama"),
            "kelas" => $request->input("kelas"),
            "jenis_kelamin" => $request->input("jenis_kelamin"),
        ]);

        return redirect()->route('crud.index')->with(['succes' => 'Data berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Desrada_ismail::findorFail($id)->delete();
        return redirect()->route('crud.index')->with(['succes' => 'Data berhasil Dihapus']);
    }
}
