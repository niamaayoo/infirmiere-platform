<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Infirmiere;

class dbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create patients
    User::factory(5)->create([
        'role' => 'patient'
    ]);

    // Create infirmieres + users
    User::factory(5)->create([
        'role' => 'infirmiere'
    ])->each(function ($user) {
        Infirmiere::create([
            'user_id' => $user->id,
            'specialite' => 'Soins généraux',
            'ville' => 'Marrakech'
        ]);
    });
    }
}
