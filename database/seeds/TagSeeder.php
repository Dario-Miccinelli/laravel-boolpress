<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [

            'happy',
            'sad',
            'feeling good',
            'tired',
            'cool'

        ];

        foreach ($tags as $tag) {

            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->save();

        }
    }
}