<?php

namespace App\Http\Controllers\Main;

use App\Models\Inventaris;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    public function index()
    {
        /* return view("main.barang.barang"); */
        $data = Inventaris::all();
        return view("admin.content.inventaris.inventaris")->with(['inventaris' => $data]);
    }

    public function create()
    {
        return view("admin.content.inventaris.inventaris_create");
    }

    public function processCreate(Request $request)
    {
        $request->validate([
            'kodeInventaris' => 'required',
            'namaInventaris' => 'required',
            'id_kat' => 'required',
            'id_ruang' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
        ]);

        $inserting = Inventaris::create($request->except('_token'));
        if($inserting){
            return redirect('/inventaris')->with("success", "data berhasil ditambahkan");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($id)
    {
        try {
            $data = Inventaris::findOrFail(decrypt($id));
            return view("admin.content.inventaris.inventaris_update")->with(['inventaris' => $data,'id'=>decrypt($id)]);
        } catch(\Exception $e) {
            abort(404);
        }

    }

    public function processUpdate(Request $request, $id)
    {
        $request->validate([
            'namaInventaris' => 'required',
            'id_kat' => 'required',
            'id_ruang' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
        ]);

        $process = Inventaris::findOrFail($id)->update($request->except('_token'));
        if($process){
            return redirect('/inventaris')->with("success", "data berhasil diperbarui");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($id)
    {
        try {
            $process = Inventaris::findOrFail(decrypt($id))->delete();
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
