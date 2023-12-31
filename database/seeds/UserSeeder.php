<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Marwan',
            'email' => 'Marwan@m.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => Hash::make()
        ]);

    }
}
