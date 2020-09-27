<?php

use App\User_type;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Administrador', 'Paciente'];
        foreach ($types as $key => $type) {
            factory(User_type::class)->create([
                'name' => $type
            ]);
        }
    }
}
