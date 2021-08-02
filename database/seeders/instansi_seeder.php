<?php

namespace Database\Seeders;
use App\Models\instansi;

use Illuminate\Database\Seeder;

class instansi_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        instansi::create([
            'nama_instansi' => 'BKN Kanreg 1',
            'alamat' => 'Jl Magelang'
        ]);
        instansi::create([
            'nama_instansi' => 'BKN Kanreg 2',
            'alamat' => 'Jl Sudirman'
        ]);
    }
}
