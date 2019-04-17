<?php

use Illuminate\Database\Seeder;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Recipe::class, 10)->create();
        factory(App\Recipe::class, 10)->state('sniadania')->create();
        factory(App\Recipe::class, 10)->state('obiady')->create();
        factory(App\Recipe::class, 10)->state('dokawy')->create();
        factory(App\Recipe::class, 10)->state('kolacje')->create();
        factory(App\Recipe::class, 10)->state('napoje')->create();
        factory(App\Recipe::class, 10)->state('salatki')->create();
        factory(App\Recipe::class, 10)->state('szybkie')->create();        
    }
}
