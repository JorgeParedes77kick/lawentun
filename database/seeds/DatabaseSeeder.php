<?php

use App\Branch_office;
use App\Company;
use App\Contractor;
use App\Document;
use App\Employee;
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
    }

    protected function truncateTablas()
    {
        $tables = [
            'user_types',
            'users',
        ];

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
    }
}
