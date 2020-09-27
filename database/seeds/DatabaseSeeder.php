<?php

use App\Schedule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas();

        $this->call(UserTypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(TherapySeeder::class);
        $this->call(TestimonySeeder::class);
        $this->call(BlogSeeder::class);
        
    }

    protected function truncateTablas()
    {
        $tables = [
            'user_types',
            'users',
            'schedule',
            'therapy',
            'testimony',
            'blog',
            'user_therapy',
            'user_shedule'
        ];

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
    }
}
