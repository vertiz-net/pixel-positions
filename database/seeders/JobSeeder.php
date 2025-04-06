<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(10)->create();
        Job::class::factory(20)->create(new Sequence([
            'featured' => true,
        ], [
            'featured' => false,
        ]))->each(function ($job) use ($tags) {
            $job->tags()->attach($tags->random(3));
        });
    }
}
