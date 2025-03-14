<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Marker;
use App\Models\Site;
use App\Models\Province;
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
            'id' => 1,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> 'pass',
        ]);

        Marker::insert([
            ['name' => 'Soweto', 'lat' => -26.2678, 'lng' => 27.8586, 'color' => 'red'],
            ['name' => 'Tembisa', 'lat' => -25.9964, 'lng' => 28.2268, 'color' => 'orange'],
            ['name' => 'Midrand', 'lat' => -25.9992, 'lng' => 28.1263, 'color' => 'green'],
            ['name' => 'Sandton', 'lat' => -26.1076, 'lng' => 28.0567, 'color' => 'red'],
            ['name' => 'Alexandra', 'lat' => -26.1035, 'lng' => 28.0895, 'color' => 'orange'],
            ['name' => 'Fourways', 'lat' => -26.0073, 'lng' => 28.0134, 'color' => 'green'],
            ['name' => 'OR Tambo', 'lat' => -26.1367, 'lng' => 28.2411, 'color' => 'red'],
            ['name' => 'Mall of Africa', 'lat' => -25.9989, 'lng' => 28.1096, 'color' => 'orange'],
            ['name' => 'Soshanguve', 'lat' => -25.5394, 'lng' => 28.0993, 'color' => 'green'],
            ['name' => 'Pretoria', 'lat' => -25.7479, 'lng' => 28.2293, 'color' => 'red'],
            ['name' => 'Springs', 'lat' => -26.2425, 'lng' => 28.4312, 'color' => 'orange']
        ]);

        Site::insert([
            ['name' => 'Soweto', 'lat' => -26.2678, 'lng' => 27.8586, 'color' => 'red', 'client'=>'Supuer Sonic', 'contact'=>'1234567890'],
            ['name' => 'Tembisa', 'lat' => -25.9964, 'lng' => 28.2268, 'color' => 'orange', 'client'=>'Supuer Sonic', 'contact'=>'1234567890'],
            ['name' => 'Midrand', 'lat' => -25.9992, 'lng' => 28.1263, 'color' => 'green', 'client'=>'Supuer Sonic', 'contact'=>'1234567890'],
            ['name' => 'Sandton', 'lat' => -26.1076, 'lng' => 28.0567, 'color' => 'red', 'client'=>'Supuer Sonic', 'contact'=>'1234567890'],
            ['name' => 'Alexandra', 'lat' => -26.1035, 'lng' => 28.0895, 'color' => 'orange', 'client'=>'Supuer Sonic', 'contact'=>'1234567890'],
            ['name' => 'Fourways', 'lat' => -26.0073, 'lng' => 28.0134, 'color' => 'green', 'client'=>'Supuer Sonic', 'contact'=>'1234567890'],
            ['name' => 'OR Tambo', 'lat' => -26.1367, 'lng' => 28.2411, 'color' => 'red', 'client'=>'Supuer Sonic', 'contact'=>'1234567890'],
            ['name' => 'Mall of Africa', 'lat' => -25.9989, 'lng' => 28.1096, 'color' => 'orange', 'client'=>'Supuer Sonic', 'contact'=>'1234567890'],
            ['name' => 'Soshanguve', 'lat' => -25.5394, 'lng' => 28.0993, 'color' => 'green', 'client'=>'Supuer Sonic', 'contact'=>'1234567890'],
            ['name' => 'Pretoria', 'lat' => -25.7479, 'lng' => 28.2293, 'color' => 'red', 'client'=>'Supuer Sonic', 'contact'=>'1234567890'],
            ['name' => 'Springs', 'lat' => -26.2425, 'lng' => 28.4312, 'color' => 'orange', 'client'=>'Supuer Sonic', 'contact'=>'1234567890']
        ]);

        Province::insert([
            ['name' => 'Mpumalanga'],
            ['name' => 'Eastern Cape'],
            ['name' => 'Free State'],
            ['name' => 'Gauteng'],
            ['name' => 'KwaZulu-Natal'],
            ['name' => 'Limpopo'],
            ['name' => 'Northern Cape'],
            ['name' => 'North West'],
            ['name' => 'Western Cape'],
           
        
        ]);
    }
}
