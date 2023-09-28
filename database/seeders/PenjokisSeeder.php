<?php

namespace Database\Seeders;

use App\Models\Penjoki;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjokisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penjokis = new Penjoki();
        $penjokis->nama_penjoki = 'Sutar';
        $penjokis->save();
    }
}
