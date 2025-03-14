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
            ['name' => 'Soweto', 'lat' => -26.2678, 'lng' => 27.8586, 'color' => 'red', 'client' => 'Super Sonic', 'contact' => '1234567890'],
    ['name' => 'Tembisa', 'lat' => -25.9964, 'lng' => 28.2268, 'color' => 'orange', 'client' => 'Vodacom', 'contact' => '0987654321'],
    ['name' => 'Midrand', 'lat' => -25.9992, 'lng' => 28.1263, 'color' => 'green', 'client' => 'MTN', 'contact' => '1029384756'],
    ['name' => 'Sandton', 'lat' => -26.1076, 'lng' => 28.0567, 'color' => 'red', 'client' => 'Airtel', 'contact' => '5647382910'],
    ['name' => 'Alexandra', 'lat' => -26.1035, 'lng' => 28.0895, 'color' => 'orange', 'client' => 'Telkom', 'contact' => '1122334455'],
    ['name' => 'Fourways', 'lat' => -26.0073, 'lng' => 28.0134, 'color' => 'green', 'client' => 'Cell C', 'contact' => '2233445566'],
    ['name' => 'OR Tambo', 'lat' => -26.1367, 'lng' => 28.2411, 'color' => 'red', 'client' => 'Super Sonic', 'contact' => '2345678901'],
    ['name' => 'Mall of Africa', 'lat' => -25.9989, 'lng' => 28.1096, 'color' => 'orange', 'client' => 'Vodacom', 'contact' => '3456789012'],
    ['name' => 'Soshanguve', 'lat' => -25.5394, 'lng' => 28.0993, 'color' => 'green', 'client' => 'MTN', 'contact' => '4567890123'],
    ['name' => 'Pretoria', 'lat' => -25.7479, 'lng' => 28.2293, 'color' => 'red', 'client' => 'Airtel', 'contact' => '5678901234'],
    ['name' => 'Springs', 'lat' => -26.2425, 'lng' => 28.4312, 'color' => 'orange', 'client' => 'Telkom', 'contact' => '6789012345'],
    ['name' => 'Daveyton', 'lat' => -26.2601, 'lng' => 28.2586, 'color' => 'red', 'client' => 'Cell C', 'contact' => '7890123456'],
    ['name' => 'Katlehong', 'lat' => -26.4963, 'lng' => 28.0992, 'color' => 'green', 'client' => 'Super Sonic', 'contact' => '8901234567'],
    ['name' => 'Boksburg', 'lat' => -26.2034, 'lng' => 28.2314, 'color' => 'orange', 'client' => 'Vodacom', 'contact' => '9012345678'],
    ['name' => 'Benoni', 'lat' => -26.1799, 'lng' => 28.2594, 'color' => 'red', 'client' => 'MTN', 'contact' => '0123456789'],
    ['name' => 'Edenvale', 'lat' => -26.1348, 'lng' => 28.1419, 'color' => 'green', 'client' => 'Airtel', 'contact' => '1234509876'],
    ['name' => 'Germiston', 'lat' => -26.2223, 'lng' => 28.1825, 'color' => 'orange', 'client' => 'Telkom', 'contact' => '2345610987'],
    ['name' => 'Alberton', 'lat' => -26.2819, 'lng' => 28.1042, 'color' => 'red', 'client' => 'Cell C', 'contact' => '3456721098'],
    ['name' => 'Vosloorus', 'lat' => -26.2901, 'lng' => 28.2205, 'color' => 'green', 'client' => 'Super Sonic', 'contact' => '4567832109'],
    ['name' => 'Wattville', 'lat' => -26.2731, 'lng' => 28.2121, 'color' => 'orange', 'client' => 'Vodacom', 'contact' => '5678943210'],
    ['name' => 'Witbank', 'lat' => -25.8640, 'lng' => 29.2003, 'color' => 'red', 'client' => 'MTN', 'contact' => '6789054321'],
    ['name' => 'Kempton Park', 'lat' => -26.1143, 'lng' => 28.2434, 'color' => 'green', 'client' => 'Airtel', 'contact' => '7890165432'],
    ['name' => 'Randburg', 'lat' => -26.1069, 'lng' => 27.9355, 'color' => 'orange', 'client' => 'Telkom', 'contact' => '8901276543'],
    ['name' => 'Boksburg East', 'lat' => -26.1770, 'lng' => 28.2335, 'color' => 'red', 'client' => 'Cell C', 'contact' => '9012387654'],
    ['name' => 'Roodepoort', 'lat' => -26.1494, 'lng' => 27.8727, 'color' => 'green', 'client' => 'Super Sonic', 'contact' => '0123498765'],
    ['name' => 'Ekurhuleni', 'lat' => -26.1830, 'lng' => 28.2115, 'color' => 'orange', 'client' => 'Vodacom', 'contact' => '1234509876'],
    ['name' => 'Brakpan', 'lat' => -26.2347, 'lng' => 28.3375, 'color' => 'red', 'client' => 'MTN', 'contact' => '2345610987'],
    ['name' => 'Zonkizizwe', 'lat' => -26.2900, 'lng' => 28.1522, 'color' => 'green', 'client' => 'Airtel', 'contact' => '3456721098'],
    ['name' => 'Atteridgeville', 'lat' => -25.7430, 'lng' => 28.0280, 'color' => 'orange', 'client' => 'Telkom', 'contact' => '4567832109'],
    ['name' => 'Mamelodi', 'lat' => -25.8000, 'lng' => 28.2030, 'color' => 'red', 'client' => 'Cell C', 'contact' => '5678943210'],
    ['name' => 'Lenasia', 'lat' => -26.3173, 'lng' => 27.8249, 'color' => 'green', 'client' => 'Super Sonic', 'contact' => '6789054321'],
    ['name' => 'Doornkop', 'lat' => -26.2350, 'lng' => 27.9280, 'color' => 'orange', 'client' => 'Vodacom', 'contact' => '7890165432'],
    ['name' => 'Diepsloot', 'lat' => -25.9955, 'lng' => 27.9715, 'color' => 'red', 'client' => 'MTN', 'contact' => '8901276543'],
    ['name' => 'Ennerdale', 'lat' => -26.3666, 'lng' => 28.0423, 'color' => 'green', 'client' => 'Airtel', 'contact' => '9012387654'],
    ['name' => 'Mohlakeng', 'lat' => -26.3700, 'lng' => 27.9483, 'color' => 'orange', 'client' => 'Telkom', 'contact' => '0123498765'],
    ['name' => 'Ivory Park', 'lat' => -25.9926, 'lng' => 28.1870, 'color' => 'red', 'client' => 'Cell C', 'contact' => '1234509876'],
    ['name' => 'Mabopane', 'lat' => -25.5127, 'lng' => 28.0800, 'color' => 'green', 'client' => 'Super Sonic', 'contact' => '2345610987'],
    ['name' => 'Olievenhoutbosch', 'lat' => -25.8550, 'lng' => 28.1723, 'color' => 'orange', 'client' => 'Vodacom', 'contact' => '3456721098'],
    ['name' => 'Soweto West', 'lat' => -26.2900, 'lng' => 27.8890, 'color' => 'red', 'client' => 'MTN', 'contact' => '4567832109'],
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
            ['name' => 'Super Sonic', 'contact'=> '0711582365', 'email'=> 'test@outlook.com','site_id'=> '1'],
            ['name' => 'MTN', 'contact'=> '0711582365', 'email'=> 'mtn@outlook.com','site_id'=> '2'],
            ['name' => 'Vodacom', 'contact'=> '0711582365', 'email'=> 'voda@outlook.com','site_id'=> '3'],
        
        ]);
    }
}
