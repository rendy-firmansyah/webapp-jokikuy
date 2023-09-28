<?php

namespace Database\Seeders;

use App\Models\Akuns;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $akuns = new Akuns();
        $akuns->user = 'admin';
        $akuns->password = hash('admin');
        $akuns->save();
    }
}
