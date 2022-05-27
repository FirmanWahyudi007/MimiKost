<?php

namespace App\Http\Controllers\User;

use App\Models\KamarKost;
use App\Models\LokasiKost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TempatKostController extends Controller
{
    // Default View
    public function index(){

        $tempatKosts = LokasiKost::all();

        return view('user.tempatKostMobile', [
            'tempatKosts' => $tempatKosts,
        ]);
    }

    public function show($id){

        $tempat = LokasiKost::where('id', $id)->first();

        $kamars = KamarKost::with('gambarkamar')->where('lokasi_kost_id', $id)->get();

        return view('user.tempatKostView', [
            'tempat' => $tempat,
            'kamars' => $kamars,
        ]);
    }

}
