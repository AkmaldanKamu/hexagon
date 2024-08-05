<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PengeluaranKategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'status'
    ];

    public function pengeluarans(): HasMany
    {
        return $this->hasMany(Pengeluaran::class);
    }
}
