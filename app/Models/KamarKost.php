<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KamarKost extends Model
{
    use HasFactory;
    protected $table = 'kamar_kosts';
    protected $PrimaryKey = 'id';
    protected $fillable = [
        'nama',
        'jumlah',
        'harga',
        'peraturan',
        'fasilitas',
        'lokasi_kost_id',
    ];
    protected $casts = [
        'fasilitas' => 'array'
    ];

    public function lokasi()
    {
        # code...
        return $this->belongsTo(LokasiKost::class, 'lokasi_kost_id' , 'id');
    }

    public function gambarkamars()
    {
        # code...
        return $this->hasMany(GambarKamar::class);
    }

    public function gambarkamar()
    {
        # code...
        return $this->hasOne(GambarKamar::class)->latestOfMany();
    }

    /**
     * Set the fasilitas
     *
     */
    public function setCatAttribute($value)
    {
        $this->attributes['fasilitas'] = json_encode($value);
    }
  
    /**
     * Get the fasilitas
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['fasilitas'] = json_decode($value);
    }
}
