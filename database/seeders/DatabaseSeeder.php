<?php

namespace Database\Seeders;

use App\Models\Apuesta;
use App\Models\Reto;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        User::factory(2)->create();
        DB::table('apuestas')->delete();
        $this->call(ApuestaSeeder::class);
        DB::table('retos')->delete();
        $this->call(RetoSeeder::class);
        Reto::factory(10)->create();
        Apuesta::factory(20)->create();

    }


}
