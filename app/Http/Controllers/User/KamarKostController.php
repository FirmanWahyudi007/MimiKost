<?php

namespace App\Http\Controllers\User;

use App\Models\KamarKost;
use App\Models\LokasiKost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KamarKostController extends Controller
{
    public function index($id){

        $kamar = KamarKost::with('gambarkamars')->where('id', $id)->first();

        return view('user.KamarKost', [
            'kamar' => $kamar,
        ]);
    }
}
