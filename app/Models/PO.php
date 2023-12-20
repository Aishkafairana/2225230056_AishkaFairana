<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PO extends Model
{
    use HasFactory;
    protected $table = 'PO';
    protected $fillable= ['kode_baju', 'warna_baju', 'ukuran_baju', 'metode_pembayaran', 'kode_voucher'];
}
