<?php

use App\Schedule;
use App\User;
use App\User_schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Schedule::class,6)->create()->each(function ($schedule){
            $id_user=User::all()->random()->id;
            factory(User_schedule::class,3)->create([
                'id_schedule'=>$schedule->id,
                'id_user'=>$id_user,
            ]);
        });
    }
}
