<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // create ten users
        User::factory(10)->create();

        // create 4 workshops without factory
        \DB::table('workshops')->insert([
            [
                'title' => 'Introductie tot Webontwikkeling',
                'description' => 'Een basisworkshop over HTML, CSS en JavaScript.',
                'date' => now()->addDays(3),
                'location' => 'Online',
                'capacity' => 20,
            ],
            [
                'title' => 'Tailwind CSS voor Beginners',
                'description' => 'Leer hoe je snel moderne UI’s bouwt met Tailwind CSS.',
                'date' => now()->addDays(8),
                'location' => 'Online',
                'capacity' => 15,
            ],
            [
                'title' => 'Inleiding tot Laravel',
                'description' => 'Ontdek de kracht van het Laravel framework.',
                'date' => now()->addDays(13),
                'location' => 'Online',
                'capacity' => 25,
            ],
            [
                'title' => 'Geavanceerde JavaScript Technieken',
                'description' => 'Verken geavanceerde concepten in JavaScript voor webontwikkeling.',
                'date' => now()->addDays(18),
                'location' => 'Online',
                'capacity' => 10,
            ],
        ]);

        // create 15 registrations without factory
        \DB::table('registrations')->insert([
            [
                'user_id' => 1,
                'workshop_id' => 1,
                'registered_at' => now(),
            ],
            [
                'user_id' => 1,
                'workshop_id' => 2,
                'registered_at' => now(),
            ],
            [
                'user_id' => 1,
                'workshop_id' => 3,
                'registered_at' => now(),
            ],
            [
                'user_id' => 1,
                'workshop_id' => 4,
                'registered_at' => now(),
            ],
            [
                'user_id' => 2,
                'workshop_id' => 1,
                'registered_at' => now(),
            ],
            [
                'user_id' => 2,
                'workshop_id' => 2,
                'registered_at' => now(),
            ],
            [
                'user_id' => 2,
                'workshop_id' => 3,
                'registered_at' => now(),
            ],
            [
                'user_id' => 3,
                'workshop_id' => 1,
                'registered_at' => now(),
            ],
            [
                'user_id' => 3,
                'workshop_id' => 2,
                'registered_at' => now(),
            ],
            [
                'user_id' => 4,
                'workshop_id' => 1,
                'registered_at' => now(),
            ],
            [
                'user_id' => 5,
                'workshop_id' => 1,
                'registered_at' => now(),
            ],
            [
                'user_id' => 6,
                'workshop_id' => 1,
                'registered_at' => now(),
            ],
            [
                'user_id' => 7,
                'workshop_id' => 1,
                'registered_at' => now(),
            ],
            [
                'user_id' => 8,
                'workshop_id' => 1,
                'registered_at' => now(),
            ],
            [
                'user_id' => 9,
                'workshop_id' => 1,
                'registered_at' => now(),
            ],
        ]);

    }
}
