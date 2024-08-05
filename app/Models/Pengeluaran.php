<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengeluaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'pengeluaran_kategori_id',
        'keperluan',
        'nominal',
        'diajukan_pada',
        'disetujui_pada'
    ];

    public function pengeluaranKategori(): BelongsTo
    {
        return $this->belongsTo(PengeluaranKategori::class);
    }
}
