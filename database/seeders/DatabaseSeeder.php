<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expert;
use App\Models\Evenement;
use App\Models\Atelier;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Create the Expert from Figure 6 [cite: 531]
        $expert = Expert::create([
            'nomExp' => 'Dupont',
            'prénomExp' => 'Jean',
            'telExp' => '0600000000',
            'SpécialitéExp' => 'Informatique',
            'EmailExp' => 'jean.dupont@email.com'
        ]);

        // 2. Create the Event from Figure 5 & 6 [cite: 521, 523]
        $event = Evenement::create([
            'theme' => 'Conférence Informatique Avancée',
            'date_debut' => '2024-04-01',
            'date_fin' => '2024-04-03',
            'description' => 'Conférence sur les dernières avancées en informatique.',
            'cout_journalier' => 500,
            'expert_id' => $expert->id
        ]);

        // 3. Create the Ateliers from Figure 6 [cite: 535]
        Atelier::create([
            'nomAtelier' => 'Atelier de Développement Web',
            'descriptionAtelier' => 'Pratique avancée sur les technologies web modernes.',
            'evenement_id' => $event->id
        ]);

        Atelier::create([
            'nomAtelier' => 'Atelier de Sécurité Informatique',
            'descriptionAtelier' => 'Mesures pratiques pour renforcer la sécurité des applications.',
            'evenement_id' => $event->id
        ]);
    }
}