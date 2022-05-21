<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LokasiKost;
use Illuminate\Http\Request;

class TempatKostController extends Controller
{
    public function index()
    {
        # code...
        $tempat = LokasiKost::all();
        return view('admin.tempat.index', compact('tempat'));
    }

    public function create()
    {
        # code...
        $tempat = null;
        return view('admin.tempat.create', compact('tempat'));
    }

    public function store(Request $request)
    {
        # code...
        $this->validate($request,[
            'alamat' => 'required'
        ]);
        // dd($request->all());
        $tempat = new LokasiKost();
        $tempat->lokasi_tempat = $request->alamat;
        $tempat->save();
        return redirect()->route('tempat.index')->with('success','Data Telah Disimpan');
    }

    public function show($id)
    {
        # code...
        $tempat = LokasiKost::where('id', $id)->first();
        // dd($tempat);
        return view('admin.tempat.create', compact('tempat'));
    }

    public function update(Request $request)
    {
        # code...
        $tempat = LokasiKost::find($request->id);
        $tempat->lokasi_tempat = $request->alamat;
        $tempat->save();
        return redirect()->route('tempat.index')->with('info','Data Telah Diubah');
    }

    public function destroy($id)
    {
        # code...
        $tempat = LokasiKost::where('id', $id)->first();
        $tempat->delete();
        return redirect()->route('tempat.index')->with('error','Data Telah Dihapus');
    }
}
