<?php

use Illuminate\Database\Seeder;
use App\Comic;

class comicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comic::class, 100)->create();
    }
}
