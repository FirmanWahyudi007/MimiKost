<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiKost extends Model
{
    use HasFactory;
    protected $table = 'lokasi_kosts';
    protected $PrimaryKey = 'id';
    protected $fillable = [
        'lokasi_tempat',
    ];

    public function kamarkost()
    {
        # code...
        return $this->hasMany(KamarKost::class);
    }
    
}
