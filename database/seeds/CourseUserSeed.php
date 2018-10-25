<?php

use Illuminate\Database\Seeder;

class CourseUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // for($i=0;$i<10;$i++){
        //     DB::table('course_user')->insert([
        //         'course_id' => $faker->randomDigitNotNull,
        //         'user_id' => $faker->randomDigitNotNull,
        //     ]);
        // }

        $items = [
            ['course_id' => 1, 'user_id'=> $faker->randomDigitNotNull,],
            ['course_id' => 2, 'user_id'=> $faker->randomDigitNotNull,],
            ['course_id' => 3, 'user_id'=> $faker->randomDigitNotNull,],
            ['course_id' => 4, 'user_id'=> $faker->randomDigitNotNull,],
            ['course_id' => 5, 'user_id'=> $faker->randomDigitNotNull,],
            ['course_id' => 6, 'user_id'=> $faker->randomDigitNotNull,],
            ['course_id' => 7, 'user_id'=> $faker->randomDigitNotNull,],
            ['course_id' => 8, 'user_id'=> $faker->randomDigitNotNull,],
            ['course_id' => 9, 'user_id'=> $faker->randomDigitNotNull,],
        ];

        foreach ($items as $item) {
            DB::table('course_user')->insert([
                'course_id' => $item["course_id"],
                'user_id' => $item["user_id"],
            ]);
        };
    }
}
