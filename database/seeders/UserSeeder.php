<?php

namespace Database\Seeders;

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
            'name' => 'José',
            'lastname' => 'Franco',
            'ci' => '3289047',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Pedro',
            'lastname' => 'Barbery',
            'ci' => '7639770',
            'password' => Hash::make('12345678'),
        ]);
    }
}
