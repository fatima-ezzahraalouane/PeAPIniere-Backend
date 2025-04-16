<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Plantes Aromatiques',
            'description' => 'Plantes utilisées pour parfumer les plats, comme le basilic, la menthe ou le thym.'
        ]);

        Category::create([
            'name' => 'Plantes Médicinales',
            'description' => 'Plantes utilisées pour leurs bienfaits sur la santé, en phytothérapie ou en infusion.'
        ]);

        Category::create([
            'name' => 'Plantes Décoratives',
            'description' => 'Plantes choisies pour embellir les espaces intérieurs ou extérieurs.'
        ]);

        Category::create([
            'name' => 'Arbres et Arbustes',
            'description' => 'Végétaux plus grands pour structurer un jardin, créer de l’ombre ou des haies.'
        ]);
    }
}
