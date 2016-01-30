<?php

use Faker\Factory;
use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        Post::truncate();
        
        $faker = Factory::create('zh_tw');

        foreach(range(10,1) as $number){
        Post::create([
        	'title'=>$faker->title,
        	'is_feature'=>rand(0,1),
        	'content'=>$faker->name,
            'created_at'=>Carbon::now()->subDay($number),
            'updated_at'=>Carbon::now()->subDay($number),

        	]);
        }
    }
}
