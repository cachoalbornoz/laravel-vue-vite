<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'            => 'Guillermo Albornoz',
            'email'             => 'cachoalbornoz@gmail.com',
            'password'          => Hash::make('cervantes'),
            'remember_token'    => Str::random(40),
            'email_verified_at' => date('Y-m-d'),
        ]);
        
        \App\Models\User::factory(2000)->create();
    }
}
