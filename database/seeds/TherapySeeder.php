<?php

use App\Therapy;
use App\User;
use App\User_therapy;
use Illuminate\Database\Seeder;

class TherapySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Therapy::class,6)->create()->each(function ($therapy){
            $id_user=User::all()->random()->id;
            factory(User_therapy::class,3)->create([
                'id_therapy'=>$therapy->id,
                'id_user'=>$id_user,
            ]);
        });
    }
}
