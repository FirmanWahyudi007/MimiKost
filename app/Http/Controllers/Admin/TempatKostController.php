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
        $type = 2;
        return view('admin.tempat.create', compact('tempat','type'));
    }

    public function store(Request $request)
    {
        # code...
        $this->validate($request,[
            'street' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);
        if(isset($request->file)){
            $extension = $request->file->getClientOriginalExtension();
            $imageName = time().rand(1,99).'.'.$extension;
            $path = $request->file->storeAs('uploads', $imageName, 'public');
            $tempat = new LokasiKost();
            $tempat->lokasi_tempat = $request->street;
            $tempat->latitude = $request->latitude;
            $tempat->longitude = $request->longitude;
            $tempat->path_gambar = $path;
            $tempat->save();
        }
        // dd($request->all());
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
        $tempat = LokasiKost::where('id', $request->id)->first();
        $tempat->lokasi_tempat = $request->street;
        $tempat->latitude = $request->latitude;
        $tempat->longitude = $request->longitude;
        if(isset($request->file)){
            $extension = $request->file->getClientOriginalExtension();
            $imageName = time().rand(1,99).'.'.$extension;
            $path = $request->file->storeAs('uploads', $imageName, 'public');
            $tempat->path_gambar = $path;
        }
        $tempat->save();
        return redirect()->route('tempat.index')->with('success','Data Telah Diubah');
    }

    public function destroy($id)
    {
        # code...
        $tempat = LokasiKost::where('id', $id)->first();
        $tempat->delete();
        return redirect()->route('tempat.index')->with('error','Data Telah Dihapus');
    }
}
