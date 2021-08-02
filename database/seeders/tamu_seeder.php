<?php


namespace Database\Seeders;
use App\Models\tamu;
use Illuminate\Database\Seeder;

class tamu_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0 ; $i<100 ; $i++){
            tamu::create([
                'nama' => 'Rizky Kurniawan '. $i,
                'instansi_id' => '1'
            ]);
        }
        
    }
}
