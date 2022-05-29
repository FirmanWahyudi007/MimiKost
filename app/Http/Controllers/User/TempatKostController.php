<?php

namespace App\Http\Controllers\User;

use App\Models\KamarKost;
use App\Models\LokasiKost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TempatKostController extends Controller
{
    // Default View
    public function index(){

        $tempatKosts = DB::table('lokasi_kosts')->select('lokasi_kosts.*', 
            DB::raw('(SELECT kamar_kosts.harga from kamar_kosts 
                WHERE kamar_kosts.lokasi_kost_id = lokasi_kosts.id 
                ORDER BY harga ASC LIMIT 1) as kamar_termurah'),
            DB::raw('(SELECT kamar_kosts.harga from kamar_kosts 
                WHERE kamar_kosts.lokasi_kost_id = lokasi_kosts.id 
                ORDER BY harga DESC LIMIT 1) as kamar_termahal'),
            )->get();

        return view('user.tempatKostMobile', [
            'tempatKosts' => $tempatKosts,
        ]);
    }

    public function show($id){

        $tempat = LokasiKost::where('id', $id)->first();
        $kamars = KamarKost::with('gambarkamar')->where('lokasi_kost_id', $id)->get();
        $fasilitas_all = KamarKost::select('fasilitas')->where('lokasi_kost_id', $id)->get();
        $fasilitas_unique = [];

        foreach ($fasilitas_all as $item) {
            $fasilitas_unique = array_unique(array_merge($fasilitas_unique, $item['fasilitas']));
        }

        return view('user.tempatKostView', [
            'tempat' => $tempat,
            'kamars' => $kamars,
            'fasilitas_unique' => $fasilitas_unique
        ]);
    }

    public function listFilter(Request $request){
        
        $urut = $request->urut;

        $tempatKosts = DB::table('lokasi_kosts')->select('lokasi_kosts.*', 
            DB::raw('(SELECT kamar_kosts.harga from kamar_kosts 
                WHERE kamar_kosts.lokasi_kost_id = lokasi_kosts.id 
                ORDER BY harga ASC LIMIT 1) as kamar_termurah'),
            DB::raw('(SELECT kamar_kosts.harga from kamar_kosts 
                WHERE kamar_kosts.lokasi_kost_id = lokasi_kosts.id 
                ORDER BY harga DESC LIMIT 1) as kamar_termahal'),
            )
            ->when($urut, function ($query, $urut) {
                return $query->orderBy('kamar_termurah', $urut);
            })
            ->get();

        return view('user.tempatKostItem', [
            'tempatKosts' => $tempatKosts,
        ]);
    }

}
