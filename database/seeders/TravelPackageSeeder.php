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
            'categories_id' => 1,
            'title' => 'Bali',
            'location' => 'Bali, Indonesia',
            'about' => "Bali is an Indonesian island known for its forested volcanic mountains, iconic rice paddies, beaches and coral reefs. The island is home to religious sites such as cliffside Uluwatu Temple. To the south, the beachside city of Kuta has lively bars, while Seminyak, Sanur and Nusa Dua are popular resort towns. The island is also known for its yoga and meditation retreats.",
            'featured_event' => 'Ngaben',
            'language' => 'Indonesian',
            'foods' => 'Nasi Campur',
            'departure_date' => '2021-01-01',
            'duration' => '5D4N',
            'type' => 'Open Trip',
            'price' => '9750000'
        ],
        [
            'categories_id' => 1,
            'title' => 'Yogyakarta',
            'location' => 'Yogyakarta, Indonesia',
            'about' => "Yogyakarta (often called “Jogja”) is a city on the Indonesian island of Java known for its traditional arts and cultural heritage. Its ornate 18th-century royal complex, or kraton, encompasses the still-inhabited Sultan’s Palace. Also within the kraton are numerous open-air pavilions that host classical Javanese dance shows and concerts of gamelan music, characterized by gongs, chimes and plucked string instruments.",
            'featured_event' => 'Sekaten',
            'language' => 'Indonesian',
            'foods' => 'Nasi Gudeg',
            'departure_date' => '2021-02-11',
            'duration' => '3D2N',
            'type' => 'Open Trip',
            'price' => '3550000'
        ],
        [
            'categories_id' => 1,
            'title' => 'Bandung',
            'location' => 'Bandung, Indonesia',
            'about' => "Bandung, capital of Indonesia’s West Java province, is a large city set amid volcanoes and tea plantations. It's known for colonial and art deco architecture, a lively, university-town feel and – thanks to its 768m elevation – relatively cool tropical weather. Bandung is also a shopping destination, with fashion outlets clustered along Jalan Setiabudi and Jalan Riau in the Dago district.",
            'featured_event' => 'Light Festival',
            'language' => 'Indonesian',
            'foods' => 'Sate',
            'departure_date' => '2021-03-28',
            'duration' => '3D2N',
            'type' => 'Open Trip',
            'price' => '3250000'
        ],
        [
            'categories_id' => 1,
            'title' => 'Jakarta',
            'location' => 'Jakarta, Indonesia',
            'about' => "Jakarta, Indonesia's massive capital, sits on the northwest coast of the island of Java. A historic mix of cultures – Javanese, Malay, Chinese, Arab, Indian and European – has influenced its architecture, language and cuisine. The old town, Kota Tua, is home to Dutch colonial buildings, Glodok (Jakarta’s Chinatown) and the old port of Sunda Kelapa, where traditional wooden schooners dock.",
            'featured_event' => 'PRJ',
            'language' => 'Indonesian',
            'foods' => 'Gado-Gado',
            'departure_date' => '2021-04-15',
            'duration' => '7D6N',
            'type' => 'Open Trip',
            'price' => '9500000'
        ],
        [
            'categories_id' => 2,
            'title' => 'Mt. Rinjani',
            'location' => 'Lombok, Indonesia',
            'about' => "Mount Rinjani is an active volcano in Indonesia on the island of Lombok. Administratively the mountain is in the Regency of North Lombok, West Nusa Tenggara. It rises to 3,727 metres, making it the second highest volcano in Indonesia.",
            'featured_event' => '-',
            'language' => 'Indonesian',
            'foods' => 'Taliwang Chicken',
            'departure_date' => '2021-06-11',
            'duration' => '9D8N',
            'type' => 'Open Trip',
            'price' => '7500000'
        ],
        [
            'categories_id' => 2,
            'title' => 'Mt. Bromo',
            'location' => 'Malang, Indonesia',
            'about' => "Mount Bromo is an active somma volcano and part of the Tengger mountains, in East Java, Indonesia. At 2,329 meters it is not the highest peak of the massif, but the most famous. The area is one of the most visited tourist destinations in East Java, and the volcano is included in the Bromo Tengger Semeru National Park.",
            'featured_event' => '-',
            'language' => 'Indonesian',
            'foods' => 'Bakso Malang',
            'departure_date' => '2021-08-15',
            'duration' => '2D1N',
            'type' => 'Open Trip',
            'price' => '2100000'
        ],
        [
            'categories_id' => 3,
            'title' => 'Nusa Penida',
            'location' => 'Bali, Indonesia',
            'about' => "Nusa Penida is an island southeast of Indonesia's island Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan and twelve even smaller islands. The Badung Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres.",
            'featured_event' => '-',
            'language' => 'Indonesian',
            'foods' => 'Betutu Chicken',
            'departure_date' => '2021-09-21',
            'duration' => '3D2N',
            'type' => 'Open Trip',
            'price' => '5550000'
        ],
        [
            'categories_id' => 3,
            'title' => 'Gili Island',
            'location' => 'Lombok, Indonesia',
            'about' => "The Gili Islands are a group of 3 tiny islands – Gili Trawangan, Gili Meno and Gili Air – in Indonesia, near the coast of northwest Lombok Island. Characterized by sandy beaches fringed with palm trees, they're known for their coral reefs just offshore. On the smallest island of Gili Meno, sea turtles swim at Turtle Point. At Gili Trawangan, the largest island, a sunken ship sits at Wreck Point near Mentigi Beach.",
            'featured_event' => '-',
            'language' => 'Indonesian',
            'foods' => 'Taliwang Chicken',
            'departure_date' => '2021-10-21',
            'duration' => '5D4N',
            'type' => 'Open Trip',
            'price' => '7000000'
        ]
    ]);
    }
}
