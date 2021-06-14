<?php

namespace App\Http\Controllers\Main;

use App\Models\HabisPakai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HabisPakaiController extends Controller
{
    public function index()
    {
        /* return view("main.barang.barang"); */
        $data = HabisPakai::all();
        return view("admin.content.habispakai.habispakai")->with(['habispakai' => $data]);
    }

    public function create()
    {
        return view("admin.content.habispakai.habispakai_create");
    }

    public function processCreate(Request $request)
    {
        $request->validate([
            'kodeBarang' => 'required',
            'namaBarang' => 'required',
            'id_kat' => 'required',
            'id_ruang' => 'required',
            'jumlah' => 'required',
        ]);

        $inserting = HabisPakai::create($request->except('_token'));
        if($inserting){
            return redirect('/habispakai')->with("success", "data berhasil ditambahkan");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($id)
    {
        try {
            $data = HabisPakai::findOrFail(decrypt($id));
            return view("admin.content.habispakai.habispakai_update")->with(['habispakai' => $data,'id'=>decrypt($id)]);
        } catch(\Exception $e) {
            abort(404);
        }

    }

    public function processUpdate(Request $request, $id)
    {
        $request->validate([
            'namaBarang' => 'required',
            'id_kat' => 'required',
            'id_ruang' => 'required',
            'jumlah' => 'required',
        ]);

        $process = HabisPakai::findOrFail($id)->update($request->except('_token'));
        if($process){
            return redirect('/habispakai')->with("success", "data berhasil diperbarui");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($id)
    {
        try {
            $process = HabisPakai::findOrFail(decrypt($id))->delete();
            if($process){
            return redirect()->back()->with("success", "data berhasil dihapus");
        }else{
            return redirect()->back()->withErrors("Terjadi kesalahan saat menghapus data");
        }
        } catch (\Exception $e) {
            abort(404);
        }

    }
}
