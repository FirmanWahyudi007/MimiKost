<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use App\Models\FasilitasKost;
use App\Models\GambarKamar;
use App\Models\KamarKost;
use App\Models\LokasiKost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KamarController extends Controller
{
    public function index()
    {
        # code...
        // $kamar = KamarKost::all();
        // $id = KamarKost::pluck('id')->toArray();
        // $fasilitas = FasilitasKost::where('id_kamar',$id)->get();
        // // dd($fasilitas->fasilitas());
        // dd($fasilitas);
        $fasilitas = null;
        $kamar = KamarKost::with('gambarkamars')->get();
        // dd($kamar);
        //dd($filePath = Storage::disk('public')->getAdapter()->getPathPrefix());
        return view('admin.kamar.index', compact('kamar','fasilitas'));
    }

    public function create()
    {
        # code...
        $lokasi = LokasiKost::all();
        $kamar = null;
        $type = 1;
        return view('admin.kamar.create', compact('kamar','lokasi','type'));
    }

    public function store(Request $request)
    {
        # code...
        // dd($request->all());
        $this->validate($request,[
            'nama' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'peraturan' => 'required',
            'fasilitas' => 'required',
            'lokasi' => 'required',
        ]);
        $kamar = new KamarKost();
        $kamar->nama = $request->nama;
        $kamar->jumlah = $request->jumlah;
        $kamar->harga = $request->harga;
        $kamar->peraturan = $request->peraturan;
        $kamar->fasilitas = $request->fasilitas;
        $kamar->lokasi_kost_id = $request->lokasi;
        $kamar->save();
        $images = [];
        if(isset($request->file)){
            foreach($request->file as $image){  
                $extension = $image->getClientOriginalExtension();
                $imageName = time().rand(1,99).'.'.$extension;
                $path = $image->storeAs('uploads', $imageName, 'public');
                $images[] = [
                    'path' => $path,
                    'kamar_kost_id' => $kamar->id,
                ];
            }
        }
        foreach ($images as $key => $image) {
            GambarKamar::create($image);
        }
        return redirect()->route('kamar.index')->with('success','Data Telah Disimpan');
    }

    public function show($id)
    {
        $kamar = KamarKost::with('gambarkamars')->find($id);
        $lokasi = LokasiKost::all();
        return view('admin.kamar.create', compact('kamar','lokasi'));
    }

    public function update(Request $request)
    {
        # code...
        $kamar = KamarKost::with('gambarkamars')->find($request->id);
        $kamar->nama = $request->nama;
        $kamar->jumlah = $request->jumlah;
        $kamar->harga = $request->harga;
        $kamar->peraturan = $request->peraturan;
        $kamar->fasilitas = $request->fasilitas;
        $kamar->lokasi_kost_id = $request->lokasi;
        $kamar->save();
        return redirect()->route('kamar.index')->with('info','Data Telah Diubah');
    }

    public function destroy($id)
    {
        $kamar = KamarKost::with('gambarkamars')->find($id);
        foreach ($kamar->gambarkamars as $key => $value) {
            # code...
           $delete = Storage::disk('public')->delete($value->path);
        }
        if($delete) {
            $kamar->gambarkamars()->delete();
            $kamar->delete();
        }
         
        return redirect()->route('kamar.index')->with('error','Data Telah Dihapus');
    }
}
