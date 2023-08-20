<?php

namespace Database\Seeders;

use App\Models\Article as ArticleAlias;
use App\Models\User as UserAlias;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        UserAlias::factory(3)->create();
        ArticleAlias::factory(10)->create();
    }
}
