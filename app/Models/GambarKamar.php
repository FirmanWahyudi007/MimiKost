<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarKamar extends Model
{
    use HasFactory;
    protected $table = 'gambar_kamars';
    protected $PrimaryKey = 'id';
    protected $fillable = [
        'kamar_kost_id',
        'path',
    ];
}
