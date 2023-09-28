<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transaksi = new Transaksi();
        $transaksi->nama_pemesan = '1';
        $transaksi->total_harga = '50000';
        $transaksi->status = 'belum bayar';
        $transaksi->deadline = '1 hari';
        $transaksi->nama_penjoki = '1';
        $transaksi->save();
    }
}
