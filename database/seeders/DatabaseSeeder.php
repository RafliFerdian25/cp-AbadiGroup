<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\News;
use App\Models\PhotoProduct;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        Profile::factory(1)->create();
        Category::factory(2)->create();
        Product::factory(10)->create();
        PhotoProduct::factory(20)->create();
        News::factory(10)->create();
        Service::factory(3)->create();
        Gallery::factory(30)->create();
        Testimonial::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
