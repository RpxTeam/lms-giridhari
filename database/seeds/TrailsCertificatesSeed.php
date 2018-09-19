<?php

use Illuminate\Database\Seeder;

class TrailsCertificatesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
       
        for($i=0;$i<10;$i++){
            \App\Trailscertificate::create([
               'order' => $i+1,
               'title' => $faker->word,
               'slug' => $faker->word,
               'image' => $faker->imageUrl(300,300),
            ]);
        }
    }
}
