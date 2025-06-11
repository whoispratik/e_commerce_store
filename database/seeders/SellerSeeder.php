<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $email = env('ADMIN_EMAIL');
        $password = env('ADMIN_PASS');

        if (! $email || ! $password) {
            $this->command->warn('ADMIN_EMAIL or ADMIN_PASS not set—skipping admin seeding.');
            return;
        }

        User::firstOrCreate(
            ['email' => $email],
            [
                'name'     => 'User Seller',
                'password' => Hash::make($password),
                'is_admin'     => true,
            ]
        );
    }
}
