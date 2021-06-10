<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('travel_packages')->insert([[
            'title' => 'Bali',
            'slug' => '1',
            'location' => 'Bali, Indonesia',
            'about' => "Bali is an Indonesian island known for its forested volcanic mountains, iconic rice paddies, beaches and coral reefs. The island is home to religious sites such as cliffside Uluwatu Temple. To the south, the beachside city of Kuta has lively bars, while Seminyak, Sanur and Nusa Dua are popular resort towns. The island is also known for its yoga and meditation retreats.",
            'featured_event' => 'Ngaben',
            'language' => 'Indonesian',
            'foods' => 'Nasi Campur',
            'departure_date' => '2020-01-01',
            'duration' => '5D4N',
            'type' => 'Open Trip',
            'price' => '9750000'
        ],
        [
            'title' => 'Yogyakarta',
            'slug' => '2',
            'location' => 'Yogyakarta, Indonesia',
            'about' => "Yogyakarta (often called “Jogja”) is a city on the Indonesian island of Java known for its traditional arts and cultural heritage. Its ornate 18th-century royal complex, or kraton, encompasses the still-inhabited Sultan’s Palace. Also within the kraton are numerous open-air pavilions that host classical Javanese dance shows and concerts of gamelan music, characterized by gongs, chimes and plucked string instruments.",
            'featured_event' => 'Sekaten',
            'language' => 'Indonesian',
            'foods' => 'Nasi Gudeg',
            'departure_date' => '2020-02-11',
            'duration' => '3D2N',
            'type' => 'Open Trip',
            'price' => '3550000'
        ],
        [
            'title' => 'Bandung',
            'slug' => '3',
            'location' => 'Bandung, Indonesia',
            'about' => "Bandung, capital of Indonesia’s West Java province, is a large city set amid volcanoes and tea plantations. It's known for colonial and art deco architecture, a lively, university-town feel and – thanks to its 768m elevation – relatively cool tropical weather. Bandung is also a shopping destination, with fashion outlets clustered along Jalan Setiabudi and Jalan Riau in the Dago district.",
            'featured_event' => 'Light Festival',
            'language' => 'Indonesian',
            'foods' => 'Sate',
            'departure_date' => '2020-03-28',
            'duration' => '3D2N',
            'type' => 'Open Trip',
            'price' => '3250000'
        ],
        [
            'title' => 'Jakarta',
            'slug' => '4',
            'location' => 'Jakarta, Indonesia',
            'about' => "Jakarta, Indonesia's massive capital, sits on the northwest coast of the island of Java. A historic mix of cultures – Javanese, Malay, Chinese, Arab, Indian and European – has influenced its architecture, language and cuisine. The old town, Kota Tua, is home to Dutch colonial buildings, Glodok (Jakarta’s Chinatown) and the old port of Sunda Kelapa, where traditional wooden schooners dock.",
            'featured_event' => 'PRJ',
            'language' => 'Indonesian',
            'foods' => 'Gado-Gado',
            'departure_date' => '2020-04-15',
            'duration' => '7D6N',
            'type' => 'Open Trip',
            'price' => '9500000'
        ]]);
    }
}
