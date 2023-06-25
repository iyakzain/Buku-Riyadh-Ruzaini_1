<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sirkulasi extends Model
{
    use HasFactory;

    protected $table='sirkulasi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tgl_pinjam',
        'nbi',
        'kode_buku',
        'tgl_kembali',
        'denda',
        'kondisi',
    ];
    public $timestamps = false;

    /**
     * Get all of the buku for the Sirkulasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buku()
    {
        return $this->hasMany(Buku::class);
    }

    /**
     * Get all of the user for the Sirkulasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
