<?php

use Illuminate\Database\Seeder;

use App\UtentiModel;

class UtentiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UtentiModel::class, 50) -> create();
    }
}
