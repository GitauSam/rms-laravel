<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vendor\Vendor;
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
        
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'phone_number' => '254700000001',
            'id_number' => '123456',
            'password' => Hash::make('JohnDoe1234'),
            'email_verified_at' => now()
        ]);

        $user->assignRole('user');

        $vendor = User::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@fishnchips.com',
            'phone_number' => '254700000003',
            'id_number' => '121456',
            'password' => Hash::make('JaneDoe1234'),
            'email_verified_at' => now()
        ]);

        $vendor->assignRole('vendor');

        Vendor::create([
            'vendor_name' => 'Fish \'n Chips',
            'status' => 1,
            'user_id' => $vendor->id
        ]);

        $superAdmin = User::create([
            'name' => 'Jack Doe',
            'email' => 'superadmin@cdj.com',
            'phone_number' => '254700000002',
            'id_number' => '113456',
            'password' => Hash::make('JackDoe1234'),
            'email_verified_at' => now()
        ]);

        $superAdmin->assignRole('super-admin');

    }
}