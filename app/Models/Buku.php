<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table='Buku';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_buku',
        'judul',
        'pengarang',
        'tahun',
        'isbn',
        'jumlah_hal',
    ];
    public $timestamps = false;

    /**
     * Get the sirkulasi that owns the Buku
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sirkulasi(): BelongsTo
    {
        return $this->belongsTo(Sirkulasi::class);
    }
   
}