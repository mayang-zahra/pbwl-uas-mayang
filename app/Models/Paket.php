<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class paket extends Model
{
    use HasFactory;
    protected $table = 'tb_paket';
    protected $primaryKey = 'paket_id';
    protected $guarded = '[]';
    protected $fillable = [
        'paket_id',
        'paket_nama_paket',
        'paket_harga_paket'
    ];
    public function transaksi() :HasMany
    {
        return $this->hasMany(transaksi::class, 'transaksi_id_paket', 'paket_id');    
    }
}
