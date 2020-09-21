<?php

use Illuminate\Database\Seeder;
use App\Kontak;
class KontakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Kontak::class,100)->create();
    }
}
