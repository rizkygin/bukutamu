<?php


namespace Database\Seeders;
use App\Models\User;
use App\Models\tamu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Factories\Factory;

class tamu_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // for($i = 0 ; $i<100 ; $i++){
        //     tamu::create([
        //         'nama' => 'Rizky Kurniawan '. $i,
        //         'instansi_id' => '1'
        //     ]);
        // }
        for($i = 0; $i<20; $i++){
            $user = User::factory()->make();

            tamu::create([
                'nama' => $user->name,
                'instansi_id' => '1'
            ]);
        }
        
    }
}
