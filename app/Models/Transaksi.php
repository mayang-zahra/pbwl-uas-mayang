<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $guarded = '[]';
    protected $fillable = [
        'transaksi_id',
        'transaksi_id_paket',
        'transaksi_id_konsumen',
        'transaksi_berat',
        'transaksi_jumlah_bayar'
    ];
    public function paket() :BelongsTo
    {
        return $this->belongsTo(paket::class, 'transaksi_id_paket');    
    }
    public function konsumen() :BelongsTo
    {
        return $this->belongsTo(konsumen::class, 'transaksi_id_konsumen');    
    }
    
}
