<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BarangayOfficials;
use App\Models\Households;
use App\Models\Residents;
use App\Models\User;
use App\Models\Zones;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@gmail.com',
               'type'=>2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Official User',
               'email'=>'Official@gmail.com',
               'type'=> 1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }

        Residents::factory(40)->create();

        Households::factory(12)->create();

        Zones::factory(7)->create();

        BarangayOfficials::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
