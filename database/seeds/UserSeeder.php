<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@role.test',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Tamu Role',
            'email' => 'tamu@role.test',
            'password' => bcrypt('123456789')
        ]);

        $user->assignRole('tamu');

        $resepsionis = User::create([
            'name' => 'Resepsionis Role',
            'email' => 'resepsionis@role.test',
            'password' => bcrypt('12345678910')
        ]);

        $resepsionis->assignRole('resepsionis');
    }
}
