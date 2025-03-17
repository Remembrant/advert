<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Marker;
use App\Models\Site;
use App\Models\Province;
use App\Models\Client;
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
            'password'=> bcrypt('pass123.'),
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
            ['name' => 'Soweto', 'lat' => -26.2678, 'lng' => 27.8586, 'color' => 'red', 'client_id' => 1],
    ['name' => 'Tembisa', 'lat' => -25.9964, 'lng' => 28.2268, 'color' => 'orange', 'client_id' => 1],
    ['name' => 'Midrand', 'lat' => -25.9992, 'lng' => 28.1263, 'color' => 'green', 'client_id' => null],
    ['name' => 'Sandton', 'lat' => -26.1076, 'lng' => 28.0567, 'color' => 'red', 'client_id' => 1],
    ['name' => 'Alexandra', 'lat' => -26.1035, 'lng' => 28.0895, 'color' => 'orange', 'client_id' => 1],
    ['name' => 'Fourways', 'lat' => -26.0073, 'lng' => 28.0134, 'color' => 'green', 'client_id' => null],
    ['name' => 'OR Tambo', 'lat' => -26.1367, 'lng' => 28.2411, 'color' => 'red', 'client_id' => 1],
    ['name' => 'Mall of Africa', 'lat' => -25.9989, 'lng' => 28.1096, 'color' => 'orange', 'client_id' => 1],
    ['name' => 'Soshanguve', 'lat' => -25.5394, 'lng' => 28.0993, 'color' => 'green', 'client_id' => null],
    ['name' => 'Pretoria', 'lat' => -25.7479, 'lng' => 28.2293, 'color' => 'red', 'client_id' => 1],
    ['name' => 'Springs', 'lat' => -26.2425, 'lng' => 28.4312, 'color' => 'orange', 'client_id' => 3],
    ['name' => 'Daveyton', 'lat' => -26.2601, 'lng' => 28.2586, 'color' => 'red', 'client_id' => 3],
    ['name' => 'Katlehong', 'lat' => -26.4963, 'lng' => 28.0992, 'color' => 'green', 'client_id' => null],
    ['name' => 'Boksburg', 'lat' => -26.2034, 'lng' => 28.2314, 'color' => 'orange', 'client_id' => 3],
    ['name' => 'Benoni', 'lat' => -26.1799, 'lng' => 28.2594, 'color' => 'red', 'client_id' => 3],
    ['name' => 'Edenvale', 'lat' => -26.1348, 'lng' => 28.1419, 'color' => 'green', 'client_id' => null],
    ['name' => 'Vosloorus', 'lat' => -26.2901, 'lng' => 28.2205, 'color' => 'green', 'client_id' => null],
    ['name' => 'Kempton Park', 'lat' => -26.1143, 'lng' => 28.2434, 'color' => 'green', 'client_id' => null],
    ['name' => 'Roodepoort', 'lat' => -26.1494, 'lng' => 27.8727, 'color' => 'green', 'client_id' => null],
    ['name' => 'Zonkizizwe', 'lat' => -26.2900, 'lng' => 28.1522, 'color' => 'green', 'client_id' => null],
    ['name' => 'Lenasia', 'lat' => -26.3173, 'lng' => 27.8249, 'color' => 'green', 'client_id' => null],
    ['name' => 'Ennerdale', 'lat' => -26.3666, 'lng' => 28.0423, 'color' => 'green', 'client_id' => null],
    ['name' => 'Mabopane', 'lat' => -25.5127, 'lng' => 28.0800, 'color' => 'green', 'client_id' => null],
// add more entries to complete the list of 100 townships
     
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

        Client::insert([
            ['name' => 'Super Sonic', 'contact'=> '0711582365', 'email'=> 'test@outlook.com'],
            ['name' => 'MTN', 'contact'=> '0711582365', 'email'=> 'mtn@outlook.com'],
            ['name' => 'Vodacom', 'contact'=> '0711582365', 'email'=> 'voda@outlook.com'],
        
        ]);
    }
}
