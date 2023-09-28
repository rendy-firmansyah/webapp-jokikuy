<?php

namespace Database\Seeders;

use App\Models\Pemesanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemesanansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pemesanan = new Pemesanan();
        $pemesanan->nama_lengkap = 'Bagas Cahyo';
        $pemesanan->email = 'bagas08@gmail.com';
        $pemesanan->nomor_telepon_wa = '087755241801';
        $pemesanan->kategory = 'tugas';
        $pemesanan->deskripsi_tugas = 'Buatkan Website E-commerce';
        $pemesanan->deadline_tugas = '1 hari';
        $pemesanan->upload_file_tugas = '';
        $pemesanan->save();
    }
}
