<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class konsumen extends Model
{
    use HasFactory;
    protected $table = 'tb_konsumen';
    protected $primaryKey = 'konsumen_id';
    protected $guarded = '[]';
    protected $fillable = [
        'konsumen_id',
        'konsumen_nama_konsumen',
        'konsumen_alamat',
        'konsumen_no_tlpn'
    ];
    public function transaksi() :HasMany
    {
        return $this->hasMany(transaksi::class, 'transaksi_id_konsumen', 'konsumen_id');    
    }
}
